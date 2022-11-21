<?php

$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$section_color = !empty(get_sub_field('section_color')) ? 'background-color:' . get_sub_field('section_color') . ';' : false;

$pre_title = !empty(get_sub_field('pre_title')) ? get_sub_field('pre_title') : false;
$pre_title_color = !empty(get_sub_field('pre_title_color')) ? 'color:' . get_sub_field('pre_title_color') . ';' : false;

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

$media = !empty(get_sub_field('media')) ? get_sub_field('media') : false;

$reorder = !empty(get_sub_field('reorder')) ? get_sub_field('reorder') : false;
$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;
$margin_before = !empty(get_sub_field('margin_before')) ? 'mt-32' : false;
$margin_after = !empty(get_sub_field('margin_after')) ? 'mb-32' : false;

$classes = implode(' ', [
    $extra_classes,
    $margin_before,
    $margin_after
]);

?>

<section id="<?= $unique_id; ?>" style="<?= $section_color; ?>" class="relative <?= $classes; ?> py-20">
    <div class="container flex flex-col justify-center items-center min-h-[430px]">
        <div class="lg:columns-2 lg:flex lg:items-center">
            <div class="lg:pr-20 lg:w-1/2 break-inside-avoid mb-16 lg:mb-0 <?= $reorder ? 'order-2' : false; ?>">
                <?php if($pre_title): ?>
                    <small class="font-medium text-lg mb-1 block" style="<?= $pre_title_color; ?>">
                        <?= $pre_title; ?>
                    </small>
                <?php endif; ?>
                
                <?php
                    if($title):
                        echo "<$header_tag class='". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."' style='$title_color'>$title</$header_tag>";
                    endif;
                ?>

                <?php if($description): ?>
                    <div class="mb-7" style="<?= $description_color; ?>"><?= $description; ?></div>
                <?php endif; ?>

                <div class="btn-wrap flex-wrap">
                    <?php if($button_1['link'] !== '#'): ?>
                        <a href="<?= $button_1['link']; ?>" target="<?= $button_1['target']; ?>" style="<?= $button_1['style']['background-color'] . $button_1['style']['text-color']; ?>" class="btn flex-grow"><?= $button_1['text']; ?></a>
                    <?php endif; ?>

                    <?php if($button_2['link'] !== '#'): ?>
                        <a href="<?= $button_2['link']; ?>" target="<?= $button_2['target']; ?>" style="<?= $button_2['style']['background-color'] . $button_2['style']['text-color']; ?>" class="btn flex-grow"><?= $button_1['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="<?= $reorder ? 'lg:pr-20' : 'lg:pl-20'; ?> lg:w-1/2 break-inside-avoid">
                <!-- <img class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full" src="https://www.salonyvonne.nl/assets/files/Afbeeldingen/Icoone/8744_FvdB_20201026-bewerkt-v4.jpg"></img> -->
                <?php if($media && $media['type'] == 'image'): ?>
                    <img srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full <?= $reorder ? 'lg:left-0' : 'lg:right-0'; ?>"></img>
                <?php elseif($media && $media['type'] == 'video'): ?>
                    <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full <?= $reorder ? 'lg:left-0' : 'lg:right-0'; ?>" muted autoplay loop playsInline></video>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
