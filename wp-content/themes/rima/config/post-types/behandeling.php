<?php

class Behandeling
{

    function __construct()
    {
        // if (!class_exists('ACF')) : return;
        // endif;
        add_action("init", [$this, "create_post_type"]);
        add_action("init", [$this, "create_taxonomies"]);
        // add_action("init", [$this, "create_settings_page"]);
        add_action('wp_ajax_load_more', [$this, "load_more"]);
        add_action('wp_ajax_nopriv_load_more', [$this, "load_more"]);
    }

    function create_post_type()
    {
        register_post_type('behandeling', [
            'labels' => [
                'name' => "Behandelingen",
                'singular_name' => "Behandeling",
                'search_items' =>  "Behandeling zoeken",
                'all_items' => "Alle behandelingen",
                'parent_item' => "Vorige behandeling",
                'parent_item_colon' => "Vorige behandeling:",
                'edit_item' => "Behandeling bewerken",
                'update_item' => __('Behandeling opslaan'),
                'add_new' => __('Nieuwe behandeling'),
                'add_new_item' => __('Nieuwe behandeling'),
                'view_item' => __('Bekijk behandeling'),
                'not_found' => __('Geen behandelingen gevonden')
            ],
            'public' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => ['title', 'revisions', 'page-attributes'],
            'hierarchical' => true,
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'behandelingen',
                'with_front' => true,
                'feeds' => true,
                'pages' => true,
            ],
        ]);
    }

    function create_taxonomies()
    {
        register_taxonomy('behandeling_category', 'behandeling', [
            'labels' => [
                'name' => "Behandelingen",
                'singular_name' => "Behandeling",
                'search_items' =>  "Behandeling zoeken",
                'all_items' => "Alle behandelingen",
                'parent_item' => "Vorige behandeling",
                'parent_item_colon' => "Vorige behandeling:",
                'edit_item' => "Behandeling bewerken",
                'update_item' => __('Behandeling opslaan'),
                'add_new' => __('Nieuwe behandeling'),
                'add_new_item' => __('Nieuwe behandeling'),
                'view_item' => __('Bekijk behandeling'),
                'not_found' => __('Geen behandelingen gevonden')
            ],
            'hierarchical' => true
        ]);
    }

    function create_settings_page()
    {
        acf_add_options_page([
            'page_title' => 'Overzichtspagina',
            'menu_title' => 'Overzichtspagina',
            'menu_slug' => 'X-settings',
            'parent_slug' => 'edit.php?post_type=X',
            'post_id' => 'X_settings',
            'capability' => 'publish_posts',
        ]);
    }

    function load_more()
    {
        // $filter_data = json_decode(stripslashes($_POST['filter_data']));

        var_dump($_POST);
        return;
        $ppp = $_POST['ppp'];
        $paged = $_POST['paged'];
        $post_type = $_POST['post_type'];

        $args = [
            'post_type' => $post_type,
            'posts_per_page' => $ppp,
            'order' => 'ASC',
            'post_status' => 'publish',
            'paged' => $paged,
        ];

        $query = new WP_Query($args);

        // Alternative for get_template_part():
        // $part_path = $_SERVER['DOCUMENT_ROOT'];
        // $part_path .= "/wp-content/themes/rima/template-parts/post-partials/{$post_type}.php";

        if($query->have_posts()):

            while($query->have_posts()): $query->the_post();
                // get_template_part..
            endwhile;

            if($query->max_num_pages > $pages):
                // load more button..
            else:
                ?>
                <script>
                    jQuery('#loadmore').remove();
                </script>
                <?php
            endif;
        else:
            echo "No posts.";
        endif;

        wp_reset_postdata();
        wp_die();
    }
}

new Behandeling;
