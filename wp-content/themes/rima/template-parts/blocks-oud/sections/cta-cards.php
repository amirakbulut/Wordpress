<?php

global $post;

$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$pre_title = !empty(get_sub_field('pre_title')) ? get_sub_field('pre_title') : false;
$title = !empty(get_sub_field('title')) ? get_sub_field('title') : false;
$description = !empty(get_sub_field('description')) ? get_sub_field('description') : false;
$button_txt = !empty(get_sub_field('button_text')) ? get_sub_field('button_text') : 'Meer informatie';

$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;

// inline css
$section_color = !empty(get_sub_field('section_color')) ? 'background-color:' . get_sub_field('section_color'). ';' : false;
$card = [
    'background_color' => !empty(get_sub_field('cards_background_color')) ? 'background-color:' . get_sub_field('cards_background_color') . ';' : false,
    'title_color' => !empty(get_sub_field('cards_title_color')) ? 'color:' . get_sub_field('cards_title_color'). ';' : false,
    'text_color' => !empty(get_sub_field('cards_text_color')) ? 'color:' . get_sub_field('cards_text_color'). ';' : false,
    'button_color' => !empty(get_sub_field('cards_button_color')) ? 'background-color:' . get_sub_field('cards_button_color'). ';' : false,
    'button_text_color' => !empty(get_sub_field('cards_button_text_color')) ? 'color:' . get_sub_field('cards_button_text_color'). ';' : false
];

$cards_type = get_sub_field('cards_type');

if($cards_type == 'post-type'):
    $filter = [
        'taxonomy' => get_sub_field('cards_post_type'),
        'terms' => get_sub_field('cards_post_type_category')
    ];

    $args = [ 'post_type' => $filter['taxonomy'] ];
    
    if($filter['taxonomy'] !== 'post'):
        $args['tax_query'] = [
            [
                'taxonomy' => $filter['taxonomy'] . '_category',
                'field' => 'slug',
                'terms' => $filter['terms'],
            ]
        ];
    else:
        $args['category'] = $filter['terms'];
    endif;

elseif($cards_type == 'children'):
    $args = [
        'post_type' => get_post_type(),
        'post_parent' => $post->ID,  
    ];
elseif($cards_type == 'manual'):
    $args = [
        'post_type' => 'any',
        'post__in' => get_sub_field('custom_items')
    ];
endif;


$query = new WP_Query($args);
?>

<section id="<?= $unique_id; ?>" style="<?= $section_color; ?>" class="<?= $extra_classes; ?>">
    <div class="container py-32">
        <?php
            if($title):
                echo "<$header_tag class='mb-10 ". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."'>$title</$header_tag>";
            endif;
        ?>

        <?php if($description): ?>
            <div class="mb-7"><?= $description; ?></div>
        <?php endif; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-stretch gap-10">

            <?php
            
            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                    ?>
                        <div class="flex flex-col justify-between w-full min-h-[300px] md:min-h-[310px] py-10 px-8 sm:p-12" style="<?= $card['background_color']; ?>">
                            <div class="wrap">
                                <h3 style="<?= $card['title_color']; ?>" class="text-[1.4rem] xs:text-h3-xs sm:text-[1.75rem] md:text-[1.5rem] mb-4">
                                    <?= get_the_title(); ?>
                                </h3>
                                <p style="<?= $card['text_color']; ?>" class="text-xs sm:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                            </div>
                            <a href="<?= get_the_permalink(); ?>" class="btn" style="<?= $card['button_color'] . $card['button_text_color']; ?>"><?= $button_txt; ?></a>
                        </div>
                    <?php
                endwhile;
                wp_reset_query(  );
                wp_reset_postdata(  );
            endif;
            
            ?>










            <!-- <div class="flex flex-col justify-between w-full min-h-[300px] md:min-h-[310px] py-10 px-8 sm:p-12 <?= $card_color; ?>">
                <div class="wrap">
                    <h3 class="text-[1.4rem] xs:text-h3-xs sm:text-[1.75rem] md:text-[1.5rem] mb-4">Een kopstuk om te verwijzen naar informatie met prioriteit</h2>
                    <p class="text-xs sm:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                </div>
                <a href="#" class="btn bg-primary text-white">Secondary CTA</a>
            </div>
            <div class="flex flex-col justify-between w-full min-h-[300px] md:min-h-[310px] py-10 px-8 sm:p-12 <?= $card_color; ?>">
                <div class="wrap">
                    <h3 class="text-[1.4rem] xs:text-h3-xs sm:text-[1.75rem] md:text-[1.5rem] mb-4">Een kopstuk om te verwijzen naar informatie met prioriteit</h2>
                    <p class="text-xs sm:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                </div>
                <a href="#" class="btn bg-primary text-white">Secondary CTA</a>
            </div>
            <div class="flex flex-col justify-between w-full min-h-[300px] py-10 px-8 sm:p-12 md:col-span-2 md:min-h-[250px] lg:col-span-1 <?= $card_color; ?>">
                <div class="wrap">
                    <h3 class="text-[1.4rem] xs:text-h3-xs sm:text-[1.75rem] md:text-[1.5rem] mb-4">Een kopstuk om te verwijzen naar informatie met prioriteit</h2>
                    <p class="text-xs sm:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                </div>
                <a href="#" class="btn bg-primary text-white">Secondary CTA</a>
            </div> -->
        </div>
    </div>
</section>
