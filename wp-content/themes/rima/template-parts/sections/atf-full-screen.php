<?php

$menu_primary = rima_get_menu('primary-menu');

$pre_title = !empty(get_field('atf_pre_title')) ? get_field('atf_pre_title') : false;
$title = !empty(get_field('atf_title')) ? get_field('atf_title') : false;
$description = !empty(get_field('atf_description')) ? get_field('atf_description') : false;

$button_1 = !empty(get_field('atf_primary_btn')) ? get_field('atf_primary_btn') : false;
$button_2 = !empty(get_field('atf_secondary_btn')) ? get_field('atf_secondary_btn') : false;

$media = !empty(get_field('atf_media')) ? get_field('atf_media') : false;


?>

<section class="media-full-width relative h-screen">
    <div class="overlay absolute w-full h-full z-10 bg-[#00000057]"></div>

    





    <div class="nav-bar w-100 sticky top-0 z-40">
        <div class="container flex justify-between h-[110px]">
            <div class="nav-left w-full md:w-1/4 hidden md:flex items-center">
                <div class="flex items-center logo md:w-[180px] w-[130px]">
                    <?php echo get_custom_logo(); ?>
                </div>
            </div>
            <div class="nav-center md:w-2/4 flex justify-start md:justify-center z-20 w-full"> <!-- items-center if no white label -->
            <div class="h-full hidden lg:flex justify-center items-center">
                    <ul class="flex gap-10 list-none lg:mr-10">
                        <?php foreach($menu_primary as $link): ?>
                            <li class="inline-flex"><a href="<?= $link['url']; ?>" class="font-light text-white text-lg"><?= $link['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
            <div class="nav-right w-1/4 md:w-1/4 flex items-center justify-end">

                <button class="hamburger lg:hidden">
                    <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                    <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                    <span class="block w-[20px] h-[2px] bg-black transition-all"></span>
                </button>

                <div class="h-full hidden lg:flex justify-center items-center">

                    <a href="#" target="#" class="btn btn-primary hidden md:flex">
                        Afspraak maken
                    </a>

                </div>

            </div>
        </div>
    </div>








    <div class="flex items-center justify-center flex-col lg:min-h-[700px] lg:container">
        <div class="container flex items-center min-h-[430px] lg:h-full lg:p-0 lg:m-0">
            
            <div class="lg:z-10 w-full lg:max-w-[45%] py-16">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block text-white"><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php if($title): ?>
                    <h1 class='sm:max-w-[75%] lg:max-w-none lg:text-[2.6rem] xl:text-[3.329rem] text-white'><?= $title; ?></h1>
                <?php endif; ?>

                <?php if($description): ?>
                    <div class="text-white max-w-[700px] drop-shadow-2xl"><?= $description; ?></div>
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
            <img src="<?= $media['url']; ?>" srcset="<?= wp_get_attachment_image_srcset($media['ID']); ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full lg:w-full lg:ml-auto lg:absolute lg:top-0 lg:bottom-0" />
        <?php elseif($media && $media['type'] == 'video'): ?>
            <video src="<?= $media['url']; ?>" alt="<?= $media['alt']; ?>" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full lg:w-1/2 lg:ml-auto lg:absolute lg:top-0 lg:bottom-0 lg:right-0 <?= $reverse ? 'lg:left-0' : 'lg:right-0'; ?>" muted autoplay loop playsInline></video>
        <?php endif; ?>
    </div>
</section>
