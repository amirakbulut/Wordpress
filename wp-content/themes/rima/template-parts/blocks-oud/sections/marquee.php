<?php

$class = !empty($args['class']) ? $args['class'] : false;

?>
<section id="marquee-slider" class="container-fluid border-b-primary/20 border-b-[1px] bg-white <?= $class; ?>">
    <div class="md:container">
        <div class="row">
            <div class="col-12">
                <div class="flex items-center justify-between relative z-[20] overflow-hidden w-full h-20">
                    <div class="track-shadow hidden md:block relative z-[10] w-[10em] h-full"></div>
                    <div class="track-slider flex items-center justify-start absolute whitespace-nowrap will-change-transform">
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                        <span class="overflow-visible text-[12px] md:text-base mr-[8vw] uppercase tracking-[1px]">$20 korting op een kuur van rugmassages</span>
                    </div>
                    <div class="track-shadow right hidden md:block relative z-[10] w-[10em] h-full"></div>
                </div>
            </div>
        </div>
    </div>
</section>

