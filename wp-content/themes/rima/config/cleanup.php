<?php

// Disable Gutenberg Editor inclusive styling
add_filter( 'use_block_editor_for_post', '__return_false' );
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
} );

// Disable Contact Form 7 styles and scripts
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// Copy & Paste the following code in templates containing contact forms:
// if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
//     wpcf7_enqueue_scripts();
// }

// if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
//     wpcf7_enqueue_styles();
// }

add_filter('wpcf7_autop_or_not', '__return_false'); 

// Remove Jquery Migrate
add_action('wp_default_scripts', function ($scripts) {
    if(!is_admin() && isset($scripts->registered['jquery'])):
        $script = $scripts->registered['jquery'];

        // Check whether the script has any dependencies
        if($script->deps):
            $script->deps = array_diff($script->deps, [
                'jquery-migrate'
            ]);
        endif;
    endif;
});

// Disable emoji's
add_action( 'init', function() {
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    add_filter( 'emoji_svg_url', '__return_false' );
    add_filter( 'tiny_mce_plugins', function($plugins) {
        return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
    });
} );

// Disable access to XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remove WordPress version number
add_filter('the_generator', function () {
    return '';
});

// Load scripts individually
define('CONCATENATE_SCRIPTS', false);

//Cleanup wp_head
remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );


// Adjust WYSIFYG & Tiny MCE
function bor_toolbars($toolbars) {
    // Add styleselect to start of 'Basic' toolbar
	if( ($key = array_search('styleselect' , $toolbars['Basic'][1])) === false ):
        array_unshift($toolbars['Basic'][1], 'styleselect');
    endif;

    // Add new toolbar 'Very Basic with Style Formats'
    $toolbars['RIMA minimal'] = [];
    $toolbars['RIMA minimal'][1] = ['styleselect', 'bold', 'italic', 'bullist', 'link', 'unlink', 'blockquote'];

	return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'bor_toolbars');

function remove_tiny_mce_buttons_from_editor( $buttons ) {
    
    $remove_buttons = array(
        'hr', // horizontal line
        'wp_more', // read more link
        'spellchecker',
        'dfw', // distraction free writing mode
        'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    
    foreach( $buttons as $button_key => $button_value ):
        if(in_array( $button_value, $remove_buttons)):
            unset( $buttons[ $button_key ] );
        endif;
    endforeach;
    
    return $buttons;
}
add_filter( 'mce_buttons', 'remove_tiny_mce_buttons_from_editor');

function remove_tiny_mce_buttons_from_kitchen_sink( $buttons ) {
    
    $remove_buttons = array(
        'forecolor', // text color
        'pastetext', // paste as text
        'removeformat', // clear formatting
        'outdent',
        'indent',
        'undo',
        'redo',
        'wp_help', // keyboard shortcuts
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}
add_filter( 'mce_buttons_2', 'remove_tiny_mce_buttons_from_kitchen_sink');

// Remove comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php'):
        wp_redirect(admin_url());
        exit;
    endif;

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for editor, comments and trackbacks in post types
    foreach (get_post_types() as $post_type):
        if (post_type_supports($post_type, 'comments')):
            remove_post_type_support($post_type, 'editor');
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
            remove_post_type_support($post_type, 'thumbnail');
        endif;
    endforeach;
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// Hide WordPress update nag to all but admins 
function hide_update_notice_to_all_but_admin() {
    if ( !current_user_can( 'update_core' ) ) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin', 1 );

// Remove all dashboard widgets
add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;
    
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
    
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_action('welcome_panel', 'wp_welcome_panel');
});

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// for wp-config:

// Prevent core themes
// define('CORE_UPGRADE_SKIP_NEW_BUNDLED', true);