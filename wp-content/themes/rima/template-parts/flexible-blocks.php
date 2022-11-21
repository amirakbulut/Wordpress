<?php

global $wp_query;

$id = false;

// If current page is an archive, grab fields from the related settings page instead
if(!empty($args['archive'])):
    
    // Get current post type
    $post_type = get_post_type();
    
    // Extend it with _{category} IF the archive page is related to a category
    if(!empty($args['archive_category'])):
        $post_type .= "_" . $args['archive_category'];
    endif;
    
    // Finally make it {post_type}_{category}_settings (if {category} is set obviously)
    $id = $post_type . "_settings";
    elseif(is_home()):
        $id = get_option('page_for_posts');
    endif;
    
// Automatically import block partials based on block's layout name
if(have_rows('flexible_blocks', $id)):
    $rowCount = count(get_field('flexible_blocks', $id));
    $i = 1;
    while(have_rows('flexible_blocks', $id)): the_row();
        $block = str_replace('_', '-', get_row_layout());
        get_template_part("template-parts/blocks/sections/$block", null, [
            'block-index' => $i,
            'id' => $block . '-' . $i,
            'last-item' => ($i == $rowCount)
        ]);
        $i++;
    endwhile;
endif;