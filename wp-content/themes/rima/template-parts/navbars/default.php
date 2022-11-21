<?php

$menu_primary = rima_get_menu('primary-menu');

// $phone = !empty(get_field('company', 'options')['phone']) ? get_field('company', 'options')['phone'] : false;

// $instagram = !empty(get_field('socials', 'options')['instagram']) ? get_field('socials', 'options')['instagram'] : false;
// $facebook = !empty(get_field('socials', 'option')['facebook']) ? get_field('socials', 'option')['facebook'] : false;
// $linkedin = !empty(get_field('socials', 'option')['linkedin']) ? get_field('socials', 'option')['linkedin'] : false;
// $twitter = !empty(get_field('socials', 'option')['twitter']) ? get_field('socials', 'option')['twitter'] : false;


?>

<div class="nav-bar w-100 bg-primary-50 sticky top-0 z-40  border-b-primary/20 border-b-[1px]">
    <div class="container flex justify-between h-[110px]">
        <div class="nav-left w-full md:w-1/4 hidden md:flex items-center">
            <div class="flex items-center logo md:w-[180px] w-[130px]">
                <?php echo get_custom_logo(); ?>
            </div>
        </div>
        <div class="nav-right w-1/4 md:w-3/4 flex items-center justify-end">

            <button class="hamburger lg:hidden">
                <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                <span class="block w-[20px] h-[2px] bg-black transition-all"></span>
            </button>

            <div class="h-full hidden lg:flex justify-center items-center">
                <ul class="flex gap-10 list-none lg:mr-10">
                    <?php foreach($menu_primary as $link): ?>
                        <li class="inline-flex"><a href="<?= $link['url']; ?>" class="font-light text-black text-lg"><?= $link['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" target="#" class="btn btn-primary hidden md:flex">
                    Afspraak maken
                </a>

            </div>

        </div>
    </div>
</div>