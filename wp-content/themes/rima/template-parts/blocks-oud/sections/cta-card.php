<?php

$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$section_color = !empty(get_sub_field('section_color')) ? 'background-color:' . get_sub_field('section_color') . ';' : false;
$card_color = !empty(get_sub_field('card_color')) ? 'background-color:' . get_sub_field('card_color') . ';' : false;

$title = !empty(get_sub_field('title')) ? get_sub_field('title') : false;
$title_color = !empty(get_sub_field('title_color')) ? 'color: ' . get_sub_field('title_color') . ';' : false;

$description = !empty(get_sub_field('description')) ? get_sub_field('description') : false;
$description_color = !empty(get_sub_field('description_color')) ? 'color: ' . get_sub_field('description_color') . ';' : false;

$button_1 = [
    'text' => !empty(get_sub_field('button_1')['title']) ? get_sub_field('button_1')['title'] : 'Meer informatie',
    'link' => !empty(get_sub_field('button_1')['url']) ? get_sub_field('button_1')['url'] : '#',
    'target' => !empty(get_sub_field('button_1')['target']) ? get_sub_field('button_1')['target'] : '_self',
    'style' => [
        'background-color' => !empty(get_sub_field('button_1_style')['background_color']) ? 'background-color:' . get_sub_field('button_1_style')['background_color'] . ';' : false,
        'text-color' => !empty(get_sub_field('button_1_style')['text_color']) ? 'color:' . get_sub_field('button_1_style')['text_color'] . ';' : false,
    ]
];

$button_2 = [
    'text' => !empty(get_sub_field('button_2')['title']) ? get_sub_field('button_2')['title'] : 'Meer informatie',
    'link' => !empty(get_sub_field('button_2')['url']) ? get_sub_field('button_2')['url'] : '#',
    'target' => !empty(get_sub_field('button_2')['target']) ? get_sub_field('button_2')['target'] : '_self',
    'style' => [
        'background-color' => !empty(get_sub_field('button_2_style')['background_color']) ? 'background-color:' . get_sub_field('button_2_style')['background_color'] . ';' : false,
        'text-color' => !empty(get_sub_field('button_2_style')['text_color']) ? 'color:' . get_sub_field('button_2_style')['text_color'] . ';' : false,
    ]
];

$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;

?>

<section id="<?= $unique_id; ?>" class="py-32 <?= $extra_classes; ?>" style="<?= $section_color; ?>">
    <div class="container">
        <div class="p-10 md:p-20 min-h-[350px] flex flex-col items-center justify-center" style="<?= $card_color; ?>">
            <div class="text-center max-w-[750px]">
                
                <?php
                    if($title):
                        echo "<$header_tag class='". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."' style='$title_color'>$title</$header_tag>";
                    endif;
                ?>
    
                <?php if($description): ?>
                    <div style="<?= $description_color; ?>" class="mb-7"><?= $description; ?></div>
                <?php endif; ?>
    
                <div class="btn-wrap flex-wrap">
                    <?php if($button_1['link'] !== '#'): ?>
                        <a href="<?= $button_1['link']; ?>" target="<?= $button_1['target']; ?>" class="btn flex-grow" style="<?= $button_1['style']['background-color'] . $button_1['style']['text-color']; ?>"><?= $button_1['text']; ?></a>
                    <?php endif; ?>
    
                    <?php if($button_2['link'] !== '#'): ?>
                        <a href="<?= $button_2['link']; ?>" target="<?= $button_2['target']; ?>" class="btn flex-grow" style="<?= $button_2['style']['background-color'] . $button_2['style']['text-color']; ?>"><?= $button_2['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
