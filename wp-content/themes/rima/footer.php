
<footer class="border-t-primary/20 border-t-[1px]">
    <div class="container py-14">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6 mb-5 md:mb-0">
                <button id="back-to-top" class="flex gap-5">
                    <?= get_template_part('template-parts/svg/arrows/arrow', 'default', ['rotate' => '-180']); ?>
                    <span>Terug omhoog</span>
                </button>
            </div>
            <div class="col-span-12 md:col-span-6 md:text-right">
            <span>© Copyright 2022 - Design en realisatie door Amir Akbulut.</span>
            </div>
        </div>
    </div>
</footer>






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