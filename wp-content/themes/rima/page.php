<?php get_header(); ?>


<main>

<?php

if(have_posts()):
    while(have_posts()): the_post();
        get_template_part('template-parts/pages/front-page/above-the-fold');
    endwhile;
endif;


?>




</main>

<?php get_footer(); ?>