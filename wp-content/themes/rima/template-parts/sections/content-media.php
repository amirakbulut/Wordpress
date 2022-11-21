<?php

$reverse = !empty($args['reverse']);

$pre_title = !empty(get_field('atf_pre_title')) ? get_field('atf_pre_title') : false;
$title = !empty(get_field('atf_title')) ? get_field('atf_title') : false;
$description = !empty(get_field('atf_description')) ? get_field('atf_description') : false;

$button_1 = !empty(get_field('atf_primary_btn')) ? get_field('atf_primary_btn') : false;
$button_2 = !empty(get_field('atf_secondary_btn')) ? get_field('atf_secondary_btn') : false;

$media = !empty(get_field('atf_media')) ? get_field('atf_media') : false;

?>

<section class="relative bg-primary-50">
    <div class="flex items-center justify-center flex-col lg:min-h-[700px] lg:container">
        <div class="container flex items-center min-h-[430px] lg:h-full lg:p-0 lg:m-0 <?= $reverse ? 'order-2' : false; ?>">

            <?php if($reverse): ?>
                <div class="w-full hidden lg:block"></div>
            <?php endif; ?>
            
            <div class="lg:z-10 w-full lg:max-w-[44%] xl:max-w-[500px] py-16">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block"><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php if($title): ?>
                    <h1 class='sm:max-w-[75%] lg:max-w-none lg:text-[2.6rem] xl:text-[3rem]'><?= $title; ?></h1>
                <?php endif; ?>

                <?php if($description): ?>
                    <div><?= $description; ?></div>
                <?php endif; ?>

                <?php if($button_1 || $button_2): ?>
                    <div class="btn-wrap flex-wrap mt-[10px] lg:mt-7">
                        <?php if(!empty($button_1['title'])): ?>
                            <a href="<?= $button_1['url']; ?>" target="<?= $button_1['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary">
                                <?= $button_1['title']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if(!empty($button_2['title'])): ?>
                            <a href="<?= $button_2['url']; ?>" target="<?= $button_2['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary-light">
                                <?= $button_2['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($media && $media['type'] == 'image'): ?>
            <img src="<?= $media['url']; ?>" srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full lg:w-1/2 lg:ml-auto lg:absolute lg:top-0 lg:bottom-0 <?= $reverse ? 'lg:left-0' : 'lg:right-0'; ?>" />
        <?php elseif($media && $media['type'] == 'video'): ?>
            <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full lg:w-1/2 lg:ml-auto lg:absolute lg:top-0 lg:bottom-0 lg:right-0 <?= $reverse ? 'lg:left-0' : 'lg:right-0'; ?>" muted autoplay loop playsInline></video>
        <?php endif; ?>
    </div>
</section>
