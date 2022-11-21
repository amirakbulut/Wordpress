<?php

$phone = !empty(get_field('company', 'options')['phone']) ? get_field('company', 'options')['phone'] : false;

$instagram = !empty(get_field('socials', 'options')['instagram']) ? get_field('socials', 'options')['instagram'] : false;
$facebook = !empty(get_field('socials', 'option')['facebook']) ? get_field('socials', 'option')['facebook'] : false;
$linkedin = !empty(get_field('socials', 'option')['linkedin']) ? get_field('socials', 'option')['linkedin'] : false;
$twitter = !empty(get_field('socials', 'option')['twitter']) ? get_field('socials', 'option')['twitter'] : false;


?>

<div class="nav-bar w-100 bg-primary-50 sticky top-0 z-40  border-b-primary/20 border-b-[1px]">
    <div class="container flex justify-between h-[90px]">
        <div class="nav-left w-full hidden md:flex items-center">
            <div class="h-full hidden lg:flex justify-center items-center">
                <span class="text-lg">Wij zijn bereikbaar via <a href="tel:<?= $phone; ?>"><?= $phone; ?></a></span>
            </div>
            <?php if(false): ?>
                <ul class="list-none p-0 flex gap-5 items-center">
                    <?php

                    if($instagram):
                    ?>
                        <li>
                            <a href="<?= $instagram; ?>" class="text-black">
                                <?php get_template_part('template-parts/svg/social/instagram'); ?>
                            </a>
                        </li>
                    <?php
                    endif;

                    if($facebook):
                    ?>
                        <li>
                            <a href="<?= $facebook; ?>" class="text-black">
                                <?php get_template_part('template-parts/svg/social/facebook'); ?>
                            </a>
                        </li>
                    <?php
                    endif;

                    if($linkedin):
                    ?>
                        <li>
                            <a href="<?= $linkedin; ?>" class="text-black">
                                <?php get_template_part('template-parts/svg/social/linkedin'); ?>
                            </a>
                        </li>
                    <?php
                    endif;

                    if($twitter):
                    ?>
                        <li>
                            <a href="<?= $twitter; ?>" class="text-black">
                                <?php get_template_part('template-parts/svg/social/twitter'); ?>
                            </a>
                        </li>
                    <?php
                    endif;



                    ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="nav-center flex justify-start md:justify-center z-20 w-full"> <!-- items-center if no white label -->
            <div class="logo w-[130px] md:w-[180px] min-h-[140px] md:min-h-[185px] flex items-center rounded-bl-2xl rounded-br-2xl shadow-lg bg-white p-6 md:p-[1.6rem] translate-y-[-200px] transition-transform duration-700">
                <?php echo get_custom_logo(); ?>
            </div>
        </div>
        <div class="nav-right w-1/4 md:w-full flex items-center justify-end">
            <!-- <button id="menu-toggle" data-modal="menu-mobile" class="modal-toggle hamburger hamburger--slider z-20" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner "></span>
                </span>
            </button> -->

            <a href="#" target="#" class="btn btn-primary hidden md:flex mr-10">
                Afspraak maken
            </a>

            

            <button class="hamburger">
                <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                <span class="block w-[25px] h-[2px] mb-[6px] bg-black transition-all"></span>
                <span class="block w-[20px] h-[2px] bg-black transition-all"></span>
            </button>

            <?php if(false && 'Direct Bellen knop'): ?>
            <a href="tel:<?= $phone; ?>" class="btn call-us bg-primary w-[40px] h-[40px] min-w-[unset] flex items-center justify-center lg:hidden p-0 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </a>
            <?php endif; ?>

            <!-- <nav id="nav-primary-desktop" class="hidden lg:flex lg:z-10 h-full items-center" aria-labelledby="Hoofdmenu">
                <ol class="flex gap-5 mg:gap-7 lg:gap-8">
                    <li><a href="#" class="m-0 tracking-[1px]">Home</a></li>
                    <li><a href="#" class="m-0 tracking-[1px]">Over ons</a></li>
                    <li><a href="#" class="m-0 tracking-[1px]">Behandelingen</a></li>
                    <li><a href="#" class="m-0 tracking-[1px]">Prijzen</a></li>
                    <li><a href="#" class="m-0 tracking-[1px]">Contact</a></li>
                </ol>
            </nav> -->
        </div>
    </div>
</div>