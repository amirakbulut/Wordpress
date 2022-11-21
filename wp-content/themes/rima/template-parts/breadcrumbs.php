<ul class="breadcrumbs d-none d-xl-inline-flex align-items-center w-100 ps-0 gap-3">
    <li class="d-flex align-items-center gap-3">
        <a href="/">Home</a>
        <?php
        get_template_part('template-parts/svg/arrows/arrow', 'chevron', [
            'width' => 10,
            'height' => 10
        ]);
        ?>
    </li>

    <?php

    if (!is_archive()) :
        $post_type = get_post_type_object($post->post_type);
        $parent = $post->post_parent;


        // If current post type has an archive, include it
        if ($post_type->has_archive || is_single()) :
    ?>
            <li class="d-flex align-items-center gap-3">
                <a href="<?= get_post_type_archive_link($post_type->name); ?>"><?= $post_type->labels->breadcrumb_name ?? $post_type->labels->name; ?></a>
                <?php
                get_template_part('template-parts/svg/arrows/arrow', 'chevron', [
                    'width' => 10,
                    'height' => 10
                ]);
                ?>
            </li>
        <?php
        endif;
        // If current Post has a parent, include it
        if ($parent) :
        ?>
            <li class="d-flex align-items-center gap-3">
                <a href="<?= get_the_permalink($parent); ?>"><?= get_the_title($parent); ?></a>
                <?php
                get_template_part('template-parts/svg/arrows/arrow', 'chevron', [
                    'width' => 10,
                    'height' => 10
                ]);
                ?>
            </li>
        <?php
        endif;
        ?>
        <!-- Include current item -->
        <li class="d-flex align-items-center gap-3">
            <a href="<?= the_permalink(); ?>"><?= is_home() ? "Knowledge" : the_title(); ?></a>
        </li>
    <?php
    else :
        $post_type = get_queried_object();
    ?>
        <!-- Include current Archive item -->
        <li class="d-flex align-items-center gap-3">
            <a href="<?= get_post_type_archive_link($post_type->name); ?>"><?= $post_type->labels->breadcrumb_name ?? $post_type->labels->name; ?></a>
        </li>
    <?php
    endif;

    ?>

</ul>