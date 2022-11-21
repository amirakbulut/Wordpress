<?php get_header(); ?>

<main>

<?php

if(have_posts()):
    while(have_posts()): the_post();
        get_template_part('template-parts/sections/atf-everbody');
    endwhile;
endif;

?>
</main>

<?php get_footer(); ?>