<?php

global $wp_query;

$id = false;
$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "" : false;

// If current page is an archive, grab fields from the related settings page instead
if(!empty($args['archive'])):
    
    // Get current post type
    $post_type = $wp_query->query['post_type'];
    
    // Extend it with _{category} IF the archive page is related to a category
    if(!empty($args['archive_category'])):
        $post_type .= "_" . $args['archive_category'];
    endif;
    
    // Finally make it {post_type}_{category}_settings (if {category} is set obviously)
    $id = $post_type . "_settings";
endif;

?>

<div class="row gx-md-5 mb-6 mb-md-8">

    <?php

    // Pre- count items inside the left and right column
    $rowCount_left = !empty(get_sub_field('column_1')) ? count(get_sub_field('column_1')) : 0;
    $rowCount_right = !empty(get_sub_field('column_2')) ? count(get_sub_field('column_2')) : 0;

    if(have_rows('column_1', $id)): ?>
        <!-- If there is a right column, add the classes "mb-7 mb-md-0" so there is margin between them on mobile -->
        <div class="col-12 col-lg-6 <?php echo $rowCount_right ? "mb-5 mb-lg-0" : false; ?>">

            <?php
                $i = 1;
                while(have_rows('column_1', $id)): the_row();
                    $block = str_replace('_', '-', get_row_layout());
                    get_template_part('template-parts/content-blocks/block', $block, [
                        'last-item' => ($i == $rowCount_left)
                    ]);
                    $i++;
                endwhile;
            ?>

        </div>

    <?php
    endif;

    if(have_rows('column_2', $id)): ?>

        <div class="col-12 col-lg-6 <?php echo $space_below; ?>">

            <?php
                $i = 1;
                while(have_rows('column_2', $id)): the_row();
                    $block = str_replace('_', '-', get_row_layout());
                    get_template_part('template-parts/content-blocks/block', $block, [
                        'last-item' => ($i == $rowCount_right)
                    ]);
                    $i++;
                endwhile;
            ?>
                
        </div>

    <?php
    endif; ?>
</div>