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

$shortcode_tag = !empty(get_sub_field('shortcode')) ? get_sub_field('shortcode') : false;

$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;
$margin_before = !empty(get_sub_field('margin_before')) ? 'mt-32' : false;
$margin_after = !empty(get_sub_field('margin_after')) ? 'mb-32' : false;

$classes = implode(' ', [
    $extra_classes,
    $margin_before,
    $margin_after
]);

?>

<section id="<?= $unique_id; ?>" style="<?= $section_color; ?>" class="relative <?= $classes; ?>">
    <div class="container py-36">
        <div class="lg:columns-2 ">
            <div class="lg:pr-20 break-inside-avoid mb-20 lg:mb-0">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block" style="<?= $pre_title_color; ?>"><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php
                    if($title):
                        echo "<$header_tag style='$title_color' class='sm:max-w-[75%] lg:max-w-none ". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."'>$title</$header_tag>";
                    endif;
                ?>

                <?php if($description): ?>
                    <div class="mb-7" style="<?= $description_color; ?>"><?= $description; ?></div>
                <?php endif; ?>
            </div>
            <div class="lg:pl-20 break-inside-avoid">
                <?php
                
                if($shortcode_tag):
                    echo do_shortcode($shortcode_tag);
                endif;

                ?>
            </div>
        </div>
    </div>
</section>
