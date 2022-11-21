<?php


$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$media = !empty(get_sub_field('media')) ? get_sub_field('media') : false;
$title = !empty(get_sub_field('title')) ? get_sub_field('title') : false;
$description = !empty(get_sub_field('description')) ? get_sub_field('description') : false;

$button_1 = [
    'text' => !empty(get_sub_field('button_1')['title']) ? get_sub_field('button_1')['title'] : 'Meer informatie',
    'link' => !empty(get_sub_field('button_1')['url']) ? get_sub_field('button_1')['url'] : '#',
    'target' => !empty(get_sub_field('button_1')['target']) ? get_sub_field('button_1')['target'] : '_self'
];

$button_2 = [
    'text' => !empty(get_sub_field('button_2')['title']) ? get_sub_field('button_2')['title'] : 'Meer informatie',
    'link' => !empty(get_sub_field('button_2')['url']) ? get_sub_field('button_2')['url'] : '#',
    'target' => !empty(get_sub_field('button_2')['target']) ? get_sub_field('button_2')['target'] : '_self'
];

$mobile = get_sub_field('mobile');
$mobile_section_color = !empty($mobile['section_color']) ? $mobile['section_color'] : false;
$mobile_title_color = !empty($mobile['title_color']) ? $mobile['title_color'] : false;
$mobile_description_color = !empty($mobile['description_color']) ? $mobile['description_color'] : false;
$mobile_button_bg = !empty($mobile['button_1_style']['background_color']) ? $mobile['button_1_style']['background_color'] : false;
$mobile_button_text = !empty($mobile['button_1_style']['text_color']) ? $mobile['button_1_style']['text_color'] : false;
$mobile_button_2_bg = !empty($mobile['button_2_style']['background_color']) ? $mobile['button_2_style']['background_color'] : false;
$mobile_button_2_text = !empty($mobile['button_2_style']['text_color']) ? $mobile['button_2_style']['text_color'] : false;

$desktop = get_sub_field('desktop');
$desktop_title_color = !empty($desktop['title_color']) ? $desktop['title_color'] : false;
$desktop_description_color = !empty($desktop['description_color']) ? $desktop['description_color'] : false;
$desktop_button_bg = !empty($desktop['button_1_style']['background_color']) ? $desktop['button_1_style']['background_color'] : false;
$desktop_button_text = !empty($desktop['button_1_style']['text_color']) ? $desktop['button_1_style']['text_color'] : false;
$desktop_button_2_bg = !empty($desktop['button_2_style']['background_color']) ? $desktop['button_2_style']['background_color'] : false;
$desktop_button_2_text = !empty($desktop['button_2_style']['text_color']) ? $desktop['button_2_style']['text_color'] : false;

$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;
$margin_before = !empty(get_sub_field('margin_before')) ? 'mt-32' : false;
$margin_after = !empty(get_sub_field('margin_after')) ? 'mb-32' : false;

$classes = implode(' ', [
    $extra_classes,
    $margin_before,
    $margin_after
]);

?>

<style>
    <?=
    "
    
    #$unique_id {
        background: $mobile_section_color;
    }

    #$unique_id .title {
        color: $mobile_title_color;
    }

    #$unique_id p {
        color: $mobile_description_color;
    }

    #$unique_id .btn.primary {
        background: $mobile_button_bg;
        color: $mobile_button_text;
    }

    #$unique_id .btn.secondary {
        background: $mobile_button_2_bg;
        color: $mobile_button_2_text;
    }

    @media screen and (min-width: 1024px) {
        #$unique_id .title {
            color: $desktop_title_color;
        }

        #$unique_id p {
            color: $desktop_description_color;
        }

        #$unique_id .btn.primary {
            background: $desktop_button_bg;
            color: $desktop_button_text;
        }

        #$unique_id .btn.secondary {
            background: $desktop_button_2_bg;
            color: $desktop_button_2_text;
        }
    }
      
    
    ";
    ?>
</style>


<section id="<?= $args['id']; ?>" class="relative <?= $classes; ?>">
    <div class="lg:h-[600px] lg:container">
        <div class="container flex flex-col justify-center pb-[30px] min-h-[450px] lg:h-full lg:max-w-[50%] lg:p-0 lg:m-0">
            <div class="z-10">
                <?php
                    if($title):
                        echo "<$header_tag class='sm:max-w-[75%] lg:text-[3rem] lg:max-w-none ". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."'>$title</$header_tag>";
                    endif;
                ?>

                <?php if($description): ?>
                    <div class="mb-7"><?= $description; ?></div>
                <?php endif; ?>

                <div class="btn-wrap flex-wrap">
                    <?php if($button_1['link'] !== '#'): ?>
                        <a href="<?= $button_1['link']; ?>" target="<?= $button_1['target']; ?>" class="btn primary flex-grow"><?= $button_1['text']; ?></a>
                    <?php endif; ?>

                    <?php if($button_2['link'] !== '#'): ?>
                        <a href="<?= $button_2['link']; ?>" target="<?= $button_2['target']; ?>" class="btn secondary flex-grow"><?= $button_2['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if($media && $media['type'] == 'image'): ?>
            <img srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] lg:h-full lg:absolute lg:top-0 lg:bottom-0 lg:left-0 lg:right-0 lg:brightness-50 object-cover object-center"></img>
        <?php elseif($media && $media['type'] == 'video'): ?>
            <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="w-screen h-full absolute top-0 bottom-0 left-0 right-0 brightness-50 object-cover object-center" muted autoplay loop playsInline></video>
        <?php endif; ?>
        
    </div>
</section>
