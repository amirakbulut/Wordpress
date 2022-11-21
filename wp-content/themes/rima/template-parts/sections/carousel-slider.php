<?php

$pre_title = !empty(get_field('atf_pre_title')) ? get_field('atf_pre_title') : false;
$title = !empty(get_field('atf_title')) ? get_field('atf_title') : false;
$description = !empty(get_field('atf_description')) ? get_field('atf_description') : false;

$button_1 = !empty(get_field('atf_primary_btn')) ? get_field('atf_primary_btn') : false;
$button_2 = !empty(get_field('atf_secondary_btn')) ? get_field('atf_secondary_btn') : false;


?>

<section class="overflow-x-hidden" style="background: linear-gradient(to bottom, rgb(255 248 245) 60%, transparent 50%);">
    <div class="flex items-center justify-center flex-col lg:min-h-[1000px] lg:container">
        <div class="container flex items-center min-h-[650px] lg:h-full lg:p-0 lg:m-0 ">
            <div class="lg:z-10 w-full py-16">
                <?php if($pre_title): ?>
                    <small class="font-medium text-xs md:text-lg mb-1 block"><?= $pre_title; ?></small>
                <?php endif; ?>

                <?php if($title): ?>
                    <h1 class='sm:max-w-[75%] lg:max-w-none lg:text-[2.6rem] xl:text-[3rem]'>Ontdek mijn diensten</h1>
                <?php endif; ?>

                <?php if($description): ?>
                    <div class="lg:max-w-[60%]">Van acupunctuur tot laserbehandelingen, u bent welkom bij ons. Wij zijn gevestigd in Arnhem.</div>
                <?php endif; ?>

                <div class="glide my-12">
                    <div class="glide__track overflow-visible" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Zwangerschapsmassage</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Cosmetische Shiatsu</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Gezichtsbehandelingen</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Cupping therapie</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Cupping therapie</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                            <li class="glide__slide flex flex-col justify-end p-10 h-[250px] lg:h-[350px] bg-tertiary rounded-[14px] bg-cover bg-no-repeat">
                                <h3>Cupping therapie</h3>
                                <p class="hidden lg:visible">The main goal is an increase in the number of kilometres cycled in the period 2017-2027 by 20 percent. Increasing the bicycle use in the Netherlands is not an end in itself.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="btn-wrap flex-wrap">
                    <a href="#" target="#" class="btn flex-grow btn-primary">
                        Bekijk alles
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
