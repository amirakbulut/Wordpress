<?php

// remove_filter ('acf_the_content', 'wpautop');

//Adds "Site Opties" page in dashboard to be used by ACF Forms
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Site options',
        'menu_title'    => 'Site options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Auto load post types
add_filter('acf/load_field/name=cards_post_type', function($field){

    // Include default post type
    $field['choices'] = ['post' => 'Blog posts'];

    // Include custom post types
    $post_types = get_post_types([
        'public'   => true,
        '_builtin' => false
    ], 'object', 'and' );

    foreach($post_types as $pt):
        $field['choices'][$pt->name] = $pt->label;
    endforeach;

    return $field;
});

// Auto load categories
add_filter('acf/load_field/name=cards_post_type_category', function($field){
    
    $field['choices'] = [];

    $pt_selected = isset($_POST['chosen_post_type']) ? $_POST['chosen_post_type'] : false;

    if($pt_selected):
        $pt_taxonomies = get_object_taxonomies($pt_selected);
        $pt_category = $pt_selected == 'post' ? 'category' : $pt_selected . '_category';

        if(in_array($pt_category, $pt_taxonomies)):
            $terms = get_terms([
                'taxonomy' => $pt_category,
                'hide_empty' => false
            ]);
            
            if(!empty($terms) || !(count($terms) == 1 && $terms[0]->term_id == 1) ):
                foreach($terms as $term):
                    $field['choices'][$term->slug] = $term->name;
                endforeach;
            endif;
        endif;
    endif;
    
    return $field;

});

add_action( 'rest_api_init', function () {
	register_rest_route('rima/', '/acf/get-flexible-field', [
        'methods' => 'GET',
        'callback' => function(){
            $post_id = !empty($_GET['post_id']) ? $_GET['post_id'] : false;
            $block = !empty($_GET['block']) ? $_GET['block'] : false;
            $field = !empty($_GET['field']) ? $_GET['field'] : false;
            $value = false;
            
            if($post_id && $block && $field):
                if(have_rows('flexible_blocks', $post_id)):
                    while(have_rows('flexible_blocks', $post_id)): the_row();
                        $curr_block = str_replace('_', '-', get_row_layout());
                    
                        if($curr_block == $block):
                            $value = get_sub_field($field) ?: false;
                        endif;
                    endwhile;
                endif;

            endif;

            return [
                'value' => $value
            ];
        }
    ]);
});
