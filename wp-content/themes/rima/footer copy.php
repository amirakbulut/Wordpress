
<!-- <footer class="border-t-primary/20 border-t-[1px]">
    <div class="container pt-32 pb-10">
        <div class="grid grid-cols-12">
            <div class="col-span-2">
                <button id="back-to-top" class="block h-[30px]">
                    <?= get_template_part('template-parts/svg/arrows/arrow', 'default', ['rotate' => '-180']); ?>
                </button>
            </div>
            <div class="col-span-10 md:flex md:flex-wrap md:justify-between">
                <div class="mb-10">
                    <span class="text-[1.5rem] md:text-h1 block mb-3 md:mb-5">Direct naar</span>
                    <nav aria-label="Direct naar">
                        <ul>
                            <li class="mb-2"><a href="#" class="text-h5">Home</a></li>
                            <li class="mb-2"><a href="#" class="text-h5">Over ons</a></li>
                            <li class="mb-2"><a href="#" class="text-h5">Behandelingen</a></li>
                            <li class="mb-2"><a href="#" class="text-h5">Prijzenlijst</a></li>
                            <li class="mb-2"><a href="#" class="text-h5">Webshop</a></li>
                            <li class="mb-2"><a href="#" class="text-h5">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <span class="text-[1.5rem] md:text-h1 block mb-3 md:mb-5">Yvonne Skin & Beauty</span>
                    <ul class="mb-8">
                        <li class="mb-2"><p class="m-0">Sint Annastraat 198C</p></li>
                        <li class="mb-2"><p class="m-0">6836 VE Nijmegen </p></li>
                        <li class="mb-2"><p class="m-0">+0243645342</p></li>
                        <li class="mb-2"><p class="m-0">Info@yvonneskinbeauty.nl</p></li>
                    </ul>
                </div>
                <div>
                    <span class="text-[1.5rem] min-w-[200px] md:text-h1 block mb-3 md:mb-5">Openingstijden</span>
                    <ul class="mb-8">
                        <li class="mb-2"><p class="m-0">Maandag <span class="float-right">09:00 - 18:00</span></p></li>
                        <li class="mb-2"><p class="m-0">Dinsdag <span class="float-right">09:00 - 18:00</span> </p></li>
                        <li class="mb-2"><p class="m-0">Woensdag <span class="float-right">09:00 - 18:00</span></p></li>
                        <li class="mb-2"><p class="m-0">Donderdag <span class="float-right">09:00 - 18:00</span></p></li>
                        <li class="mb-2"><p class="m-0">Vrijdag <span class="float-right">09:00 - 18:00</span></p></li>
                        <li class="mb-2"><p class="m-0">Zaterdag <span class="float-right">09:00 - 18:00</span></p></li>
                        <li class="mb-2"><p class="m-0">Zondag <span class="float-right">09:00 - 18:00</span></p></li>
                    </ul>
                </div>
                <div>
                    <span class="text-[1.5rem] md:text-h1 block mb-3 md:mb-5">Social Media</span>
                    <ul class="list-none p-0 flex gap-5 items-center">
                        <li><a href="#"><?php get_template_part('template-parts/svg/social/instagram', null, ['class' => 'h-[20px]']); ?></a></li>
                        <li><a href="#"><?php get_template_part('template-parts/svg/social/facebook', null, ['class' => 'h-[20px]']); ?></a></li>
                        <li><a href="#"><?php get_template_part('template-parts/svg/social/linkedin', null, ['class' => 'h-[20px]']); ?></a></li>
                        <li><a href="#"><?php get_template_part('template-parts/svg/social/twitter', null, ['class' => 'h-[20px]']); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 mt-20 order-last">
                <small>Ontwikkeld met door Amir.</small>
            </div>
        </div>
    </div>
</footer> -->






<script>
var fired = false;

window.addEventListener('scroll', () => {
    if (fired === false) {
        fired = true;
        
        setTimeout(() => {

            // Marketing scripts go here.

        }, 1000) // 1000ms or 1s works fine, but you can adjust this timeout.
    }
});
</script>
<?php wp_footer(); ?>
</body>
</html>