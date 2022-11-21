<?php

// Init menu's
register_nav_menus( 
	[
        'top-menu' => 'Top menu',
        'primary-menu' => 'Primary menu',
        'footer-menu' => 'Footer menu'
    ]
);

// Enqueue styles & scripts
add_action( 'wp_enqueue_scripts', function() {
    wp_deregister_script( 'wp-embed' );
    wp_enqueue_style( 'theme-main-style', get_template_directory_uri() . '/assets/dist/main.css' );
    wp_enqueue_script( 'theme-main-script', get_template_directory_uri() . '/assets/dist/main.js', [], '', true);
    // wp_enqueue_script( 'glide', get_template_directory_uri() . '/assets/js/libraries/glide.min.js', [], '', true);
} );

add_action('admin_enqueue_scripts', function(){
    wp_enqueue_script( 'theme-admin', get_template_directory_uri() . '/assets/dist/admin.js', [], '', true);
});


// User roles
add_action('after_setup_theme', function () {

    if (!get_option('theme_roles_created')) return;

    $site_owner_caps = [
        // 'switch_themes' => 1,
        // 'edit_themes' => 1,
        // 'activate_plugins' => 1,
        // 'edit_plugins' => 1,
        // 'edit_users' => 1,
        'edit_files' => 1,
        // 'manage_options' => 1,
        // 'moderate_comments' => 1,
        'manage_categories' => 1,
        'manage_links' => 1,
        'upload_files' => 1,
        // 'import' => 1,
        'unfiltered_html' => 1,
        'edit_posts' => 1,
        'edit_others_posts' => 1,
        'edit_published_posts' => 1,
        'publish_posts' => 1,
        'edit_pages' => 1,
        'read' => 1,
        // 'level_10' => 1,
        // 'level_9' => 1,
        // 'level_8' => 1,
        // 'level_7' => 1,
        // 'level_6' => 1,
        // 'level_5' => 1,
        // 'level_4' => 1,
        // 'level_3' => 1,
        // 'level_2' => 1,
        // 'level_1' => 1,
        // 'level_0' => 1,
        'edit_others_pages' => 1,
        'edit_published_pages' => 1,
        'publish_pages' => 1,
        'delete_pages' => 1,
        'delete_others_pages' => 1,
        'delete_published_pages' => 1,
        'delete_posts' => 1,
        'delete_others_posts' => 1,
        'delete_published_posts' => 1,
        'delete_private_posts' => 1,
        'edit_private_posts' => 1,
        'read_private_posts' => 1,
        'delete_private_pages' => 1,
        'edit_private_pages' => 1,
        'read_private_pages' => 1,
        // 'delete_users' => 1,
        // 'create_users' => 1,
        // 'unfiltered_upload' => 1,
        'edit_dashboard' => 1,
        // 'update_plugins' => 1,
        // 'delete_plugins' => 1,
        // 'install_plugins' => 1,
        // 'update_themes' => 1,
        // 'install_themes' => 1,
        // 'update_core' => 1,
        // 'list_users' => 1,
        // 'remove_users' => 1,
        // 'promote_users' => 1,
        // 'edit_theme_options' => 1,
        // 'delete_themes' => 1,
        // 'export' => 1,
    ];    

    add_role('site-owner', 'Site owner', $site_owner_caps);
    
    update_option('theme_roles_created', true);
    
});

// Add custom image sizes
// add_image_size( "rima-full", 1920, 1920 );
// add_image_size( "rima-thumb", 640, 640 );

// Set default values for the upload media box
add_action('after_setup_theme', function() {
    update_option('image_default_align', 'center' );
	update_option('image_default_size', 'large' );
});


// Enable Custom Logo
add_theme_support('custom-logo');

// Enable Thumbnails
add_theme_support('post-thumbnails');

// Enable Title support
add_theme_support( 'title-tag' );

 // Allow SVG
add_filter( 'wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4);

add_filter( 'upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

add_action( 'admin_head', function () {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
        </style>';
} );


/**
 * Modify admin footer text
 */

add_filter( 'admin_footer_text', function () {
    echo 'Made with love by Rima</a>';
} );

/**
 * Insert custom login logo
 */

add_action( 'login_head', function () {
    echo '
        <style>
            .login h1 a { 
                background-image: url(/wp-content/themes/rima/assets/img/logo.svg) !important; 
                background-size: 150px 65px;
                width:234px; 
                height:67px; 
                display:block; 
            }
            .wp-core-ui .button-primary {
                background: #141c32;
                border-color: #141c32;
                padding: 0 30px !important;
            }
            .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
                background: #141c32;
                border-color: #141c32;
            }
            .login form {
                border: 1px solid #e1dfdf;
            }
        </style>
    ';
} );

/**
 * Create custom WordPress dashboard widget
 */

add_action( 'wp_dashboard_setup', function () {
    wp_add_dashboard_widget( 'theme-custom-widget', 'Introductie', function () {
        echo '
            <h2>Aan de slag</h2>
            <p>In het linker menu vind je alle mogelijkheden voor het aanmaken en beheren van je content. Kom je er niet uit? Neem dan contact met ons op via onderstaande opties:</p>
            <ul>
            <li><span style="margin-right:10px;transform: scale(0.9);" class="dashicons dashicons-email"></span> <a href="mailto:development@website.nl">development@website.nl</a></li>
            <li><span style="margin-right:10px;transform: scale(-0.9) rotate(-90deg);" class="dashicons dashicons-phone"></span> <a href="tel:+31640131890">+31640131890</a></li>
            </ul>
        ';
    } );
} );



// Add new dashboard color scheme
add_action('admin_init', function() {

    $unique_key = "theme-scheme";
    $readable_name = "My new color scheme";
    $css_location = get_stylesheet_directory_uri() . '/assets/css/dashboard/color-scheme.css';
    $scheme_palette = ['#141c32', '#1d253e', '#00b1ed'];

    wp_admin_css_color(
        $unique_key,
        $readable_name,
        $css_location,
        $scheme_palette
    );
    
});