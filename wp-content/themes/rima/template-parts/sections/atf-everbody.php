<?php

$pre_title = !empty(get_field('atf_pre_title')) ? get_field('atf_pre_title') : false;
$title = !empty(get_field('atf_title')) ? get_field('atf_title') : false;
$description = !empty(get_field('atf_description')) ? get_field('atf_description') : false;

$button_1 = !empty(get_field('atf_primary_btn')) ? get_field('atf_primary_btn') : false;
$button_2 = !empty(get_field('atf_secondary_btn')) ? get_field('atf_secondary_btn') : false;

$media = !empty(get_field('atf_media')) ? get_field('atf_media') : false;


?>

<section class="media-full-width relative bg-white">
    <div class="overlay absolute bottom-0 w-full h-full z-10"></div>
    
    <div class="flex items-center justify-center flex-col lg:min-h-[700px] lg:container">

        <?php if($media && $media['type'] == 'image'): ?>
            <img src="<?= $media['url']; ?>" srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="absolute w-full h-full object-center object-cover" />
        <?php elseif($media && $media['type'] == 'video'): ?>
            <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="absolute w-full h-full object-center object-cover" muted autoplay loop playsInline></video>
        <?php endif; ?>

        <div class="container z-10 flex items-end min-h-[430px] lg:h-full lg:p-0 lg:m-0">
            
            <div class="lg:z-10 w-full lg:max-w-[45%] pt-8 pb-16">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block "><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php if($title): ?>
                    <h1 class='font-title text-white max-w-[90%] sm:max-w-[75%] lg:max-w-none text-[2.3rem] lg:text-[2.6rem] xl:text-[3.329rem] '><?= $title; ?></h1>
                <?php endif; ?>

                <?php if(false && $description): ?>
                    <div class=" max-w-[700px] drop-shadow-2xl"><?= $description; ?></div>
                <?php endif; ?>

                <?php if(true): ?>
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




    </div>
</section>
