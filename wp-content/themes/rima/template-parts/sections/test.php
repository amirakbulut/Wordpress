<?php

$reverse = !empty($args['reverse']);

$pre_title = !empty(get_field('atf_pre_title')) ? get_field('atf_pre_title') : false;
$title = !empty(get_field('atf_title')) ? get_field('atf_title') : false;
$description = !empty(get_field('atf_description')) ? get_field('atf_description') : false;

$button_1 = !empty(get_field('atf_primary_btn')) ? get_field('atf_primary_btn') : false;
$button_2 = !empty(get_field('atf_secondary_btn')) ? get_field('atf_secondary_btn') : false;

$media = !empty(get_field('atf_media')) ? get_field('atf_media') : false;

?>

<section class="relative py-20">
    <div class="container flex flex-col justify-center items-center min-h-[430px]">
        <div class="lg:columns-2 lg:flex lg:items-center">
            <div class="<?= $reverse ? 'lg:pl-20' : 'lg:pr-20'; ?>  lg:w-1/2 break-inside-avoid mb-16 lg:mb-0 <?= $reverse ? 'order-2' : false; ?> ">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block"><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php if($title): ?>
                    <h2 class='sm:max-w-[75%] lg:max-w-none'><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($description): ?>
                    <div><?= $description; ?></div>
                <?php endif; ?>

                <?php if($button_1 || $button_2): ?>
                    <div class="btn-wrap flex-wrap mt-[10px] lg:mt-7">
                        <?php if($button_1['title']): ?>
                            <a href="<?= $button_1['url']; ?>" target="<?= $button_1['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary">
                                <?= $button_1['title']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if($button_2['title']): ?>
                            <a href="<?= $button_2['url']; ?>" target="<?= $button_2['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary-light">
                                <?= $button_2['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="lg:w-1/2 break-inside-avoid">
                <!-- <img class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full" src="https://www.salonyvonne.nl/assets/files/Afbeeldingen/Icoone/8744_FvdB_20201026-bewerkt-v4.jpg"></img> -->
                <?php if($media && $media['type'] == 'image'): ?>
                    <img srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full <?= $reverse ? 'lg:left-0' : 'lg:right-0'; ?>"></img>
                <?php elseif($media && $media['type'] == 'video'): ?>
                    <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full <?= $reverse ? 'lg:left-0' : 'lg:right-0'; ?>" muted autoplay loop playsInline></video>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>