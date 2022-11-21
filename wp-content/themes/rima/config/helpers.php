<?php

/*

Helper function to get fields from the settings-pages of the current loaded post type.
It searches for the following setting-pages:

    - {post_type}_settings
    - {post_type}_{category}_settings

*/
function rima_get_settings_field($field, $category = null)
{
    global $wp_query;
    
    if(!class_exists('ACF')): return; endif;

    // Get current post type
    $settings_page = $wp_query->query['post_type'];

    // Extend it with _{category} if the overview is related to a category
    if($category):
        $settings_page .= "_" . $category;
    endif;

    // Get the field from setting page with id: {post_type}_{category}_settings (if category is set)
    return get_field($field, $settings_page . '_settings');
}

// Allows ACF field to be relational from both ways
function rima_relational_field($field_1, $field_2)
{
    if(!class_exists('ACF')): return; endif;

    $field = $field_1 . "_" . $field_2 . "_relationship";

    $callback = function($value, $post_id, $field){
        $field_name = $field['name'];
        $field_key = $field['key'];
        $global_name = 'is_updating_' . $field_name;
        
        // bail early if this filter was triggered from the update_field() function called within the loop below
        // - this prevents an inifinte loop
        if( !empty($GLOBALS[ $global_name ]) ) return $value;
        
        // set global variable to avoid inifite loop
        $GLOBALS[ $global_name ] = 1;
        
        // loop over selected posts and add this $post_id
        if( is_array($value) ) {
            foreach( $value as $post_id2 ) {
                
                // load existing related posts
                $value2 = get_field($field_name, $post_id2, false);
                
                // allow for selected posts to not contain a value
                if( empty($value2) ) {
                    $value2 = array();
                }
                
                // bail early if the current $post_id is already found in selected post's $value2
                if( in_array($post_id, $value2) ) continue;
                
                // append the current $post_id to the selected post's 'related_posts' value
                $value2[] = $post_id;
                
                // update the selected post's value (use field's key for performance)
                update_field($field_key, $value2, $post_id2);
            }
        }
        
        // find posts which have been removed
        $old_value = get_field($field_name, $post_id, false);
        
        if( is_array($old_value) ) {
            foreach( $old_value as $post_id2 ) {
                // bail early if this value has not been removed
                if( is_array($value) && in_array($post_id2, $value) ) continue;
                
                // load existing related posts
                $value2 = get_field($field_name, $post_id2, false);
                
                // bail early if no value
                if( empty($value2) ) continue;
                
                // find the position of $post_id within $value2 so we can remove it
                $pos = array_search($post_id, $value2);
                
                // remove
                unset( $value2[ $pos] );
                
                // update the un-selected post's value (use field's key for performance)
                update_field($field_key, $value2, $post_id2);
            }
        }
        
        // reset global varibale to allow this filter to function as per normal
        $GLOBALS[ $global_name ] = 0;
    
        return $value;
    };

    add_filter('acf/update_value/name=' . $field, $callback, 10, 3);
}

// Filter phone numbers
function rima_filter_phone($phone_number) {
	$filtered_phone_arr = [];
	preg_match_all('/[0-9\-\+]/', $phone_number, $filtered_phone_arr);
	$filtered_phone = implode('', $filtered_phone_arr[0]);

	if($filtered_phone[0] == '0') {
		$filtered_phone = ltrim($filtered_phone, '0');
	}

	return '+31' . $filtered_phone;
}

// Use this if you need to switch post types 
function rima_switch_post_type($old_post_type, $new_post_type) {
    global $wpdb;

    // Run the update query
    $wpdb->update(
        $wpdb->posts,
        // Set
        array( 'post_type' => $new_post_type),
        // Where
        array( 'post_type' => $old_post_type )
    );
}

// Grab the current template filename
add_filter( 'template_include', function($template){
    $GLOBALS['current_theme_template'] = trim(basename($template), '.php');
    return $template;
}, 1000 );
function rima_get_current_template() {
    return $GLOBALS['current_theme_template'];
}

function rima_get_menu($slug)
{
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations[$slug] ?? false;
    if(!$menuID) return false;

    $menu_array = wp_get_nav_menu_items($menuID);
    $menu = [];

    function populate_children($menu_array, $menu_item)
    {
        $children = [];
        if (!empty($menu_array)) :
            foreach ($menu_array as $k=>$m) :
                if ($m->menu_item_parent == $menu_item->ID) :
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                endif;
            endforeach;
        endif;
        return $children;
    }

    foreach ($menu_array as $m):
        if (empty($m->menu_item_parent)):
            $menu[$m->ID] = [];
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        endif;
    endforeach;
      
    return $menu;
}