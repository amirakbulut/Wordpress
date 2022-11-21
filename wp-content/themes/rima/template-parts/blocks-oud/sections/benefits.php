<?php


$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$title = !empty(get_sub_field('title')) ? get_sub_field('title') : false;
$description = !empty(get_sub_field('description')) ? get_sub_field('description') : false;

$benefits = !empty(get_sub_field('benefits')) ? get_sub_field('benefits') : false;

?>

<section  id="<?= $unique_id; ?>" class="bg-secondary">
    <div class="container py-32">
        <div class="mb-10">
            <?php
                if($title):
                    echo "<$header_tag class='sm:max-w-[75%] lg:max-w-none ". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."'>$title</$header_tag>";
                endif;

                if($description):
                    echo "<p>". $description ."</p>";
                endif;
                
            ?>
        </div>
        <div class="grid gap-y-4 lg:gap-y-8 md:grid-cols-2 lg:grid-cols-3">
            <?php if(have_rows('benefits')): ?>
                <?php while(have_rows('benefits')): the_row(); ?>
                <div class="benefit h-fit flex items-center sm:sm:w-[85%] md:w-auto gap-5">
                    <div class="icon">
                        <?php get_template_part('template-parts/svg/check'); ?>
                    </div>
                    <div>
                        <h3 class="<?= $description ? 'mb-2 lg:mb-4' : 'm-0'; ?> text-[1.3rem] lg:text-[1.6rem]">
                            <?= get_sub_field('title'); ?>
                        </h3>
                        <?php if($description): ?>
                            <p><?= $description; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

