<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-beige">

<!-- <div id="menu-mobile" class="container block lg:hidden overflow-x-clip overflow-y-scroll bg-white z-10 h-screen w-screen fixed inset-0 transition-opacity duration-700 pt-[200px]">
    <nav id="nav-primary" aria-labelledby="Hoofdmenu">
        <ol class="flex flex-col gap-6 lg:gap-10">
            <li><a href="#" class="block text-h1 m-0">Home</a></li>
            <li><a href="#" class="block text-h1 m-0">Over ons</a></li>
            <li class="has-children"><a href="#" class="block text-h1 m-0">Behandelingen</a></li>
            <li><a href="#" class="block text-h1 m-0">Prijzen</a></li>
            <li><a href="#" class="block text-h1 m-0">Contact</a></li>
        </ol>
    </nav>
</div> -->

<?php if(false): ?>
<!-- 
<section id="top-banner" class="container-fluid hidden md:flex bg-black">
    <div class="h-[50px] container relative flex justify-between">


        <ul class="list-none p-0 flex gap-5 items-center text-white">
            <li><a href="#"><?php get_template_part('template-parts/svg/social/instagram'); ?></a></li>
            <li><a href="#"><?php get_template_part('template-parts/svg/social/facebook'); ?></a></li>
            <li><a href="#"><?php get_template_part('template-parts/svg/social/linkedin'); ?></a></li>
            <li><a href="#"><?php get_template_part('template-parts/svg/social/twitter'); ?></a></li>
        </ul>
        <ul class="hidden md:flex items-center list-none p-0 gap-5 text-white">
            <li><a href="#" class="text-tiny tracking-[1px]">FAQ</a></li>
            <li><a href="#" class="text-tiny tracking-[1px]">Verzekering</a></li>
            <li><a href="#" class="text-tiny tracking-[1px]">Nieuwsbrief</a></li>
        </ul>
    </div>
</section> -->
<?php endif; ?>


<div class="w-full h-[50px] bg-black">

</div>

<?php

get_template_part('template-parts/navbars/navbar-everbody');
// get_template_part('template-parts/navbars/default');

// get_template_part('template-parts/navbars/nav-label');







?>

<!-- <a href="#" class="bg-primary-700 mx-10 fixed bottom-10 left-0 right-0 h-[50px] z-20 rounded-[3px] text-white text-base flex items-center justify-center">
    Afspraak inplannen
</a> -->