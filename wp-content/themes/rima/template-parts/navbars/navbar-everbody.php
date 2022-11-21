<?php

$menu_primary = rima_get_menu('primary-menu');

?>

<!-- <div class="top-notification bg-primary p-[16px]">
    <div class="container text-center">
        <span class="text-white text-[14px] font-text font-light">Experience this season's top treatments. Book an appointment.</span>
    </div>
</div> -->

<div class="nav-bar w-100 sticky top-0 z-40">
    <div class="px-6 bg-white flex justify-between h-[80px]">
        <div class="flex justify-between items-center gap-5 w-full lg:container">


            <div class="logo w-[120px] lg:w-[145px]">
                <?php
                    // get_template_part('template-parts/svg/logos/logo');
                    echo get_custom_logo();
                ?>
            </div>

            <ul class="flex p-0 list-none gap-8">
                <li><a href="#" class="text-base">Home</a></li>
                <li><a href="#" class="text-base">Over ons</a></li>
                <li><a href="#" class="text-base">Behandelingen</a></li>
                <li><a href="#" class="text-base">Vergoedingen</a></li>
                <li><a href="#" class="text-base">Contact</a></li>
            </ul>

            <a href="#" target="#" class="btn btn-primary leading-none whitespace-nowrap">
                Afspraak maken
            </a>

            <button data-modal="menu-mobile" class="modal-toggle hamburger lg:hidden mr-4">
                <svg width="20" height="17"><g stroke="#252A36" stroke-width="1.1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 8.5h17.55M1 15.559l17.55-.059M1 1.441h17.1"></path></g></svg>
            </button>

            <?php if(false && "version 2"): ?>
                <div class="flex items-center">
                    <button data-modal="menu-mobile" class="modal-toggle hamburger lg:hidden mr-4">
                        <svg width="20" height="17"><g stroke="#252A36" stroke-width="1.1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 8.5h17.55M1 15.559l17.55-.059M1 1.441h17.1"></path></g></svg>
                    </button>
                    <div class="logo w-[120px]">
                        <?php
                            // get_template_part('template-parts/svg/logos/logo');
                            echo get_custom_logo();
                        ?>
                    </div>
                </div>


                <a href="#" target="#" class="text-[13px]  font-light font-text flex items-center justify-center min-h-[40px] lg:min-h-[45px] w-fit rounded-[3px] px-4 btn-primary leading-none whitespace-nowrap">
                    Afspraak maken
                </a>
            <?php endif; ?>

        </div>


    </div>
    <div id="menu-mobile" class="absolute top-[80px] w-full h-[calc(100vh-80px)] bg-[#65554e40] backdrop-blur-lg opacity-0 pointer-events-none">
        <div class="bg-white h-[200px] w-full"></div>
    </div>
</div>