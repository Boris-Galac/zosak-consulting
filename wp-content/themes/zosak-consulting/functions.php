<?php


function mytheme_load_scripts() {
    wp_enqueue_style('theme-style', get_theme_file_uri('/src/css/style.css'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    wp_enqueue_script('custom-script', get_theme_file_uri('/src/js/main.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'mytheme_load_scripts');



function mytheme_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'menus' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );
    add_theme_support( 'wp-pagenavi' ); // Add this line to enable wp-pagenavi plugin.
    // add_image_size('pageBanner', 1048, 385, true);
    add_theme_support('custom-header');
}

add_action( 'after_setup_theme', 'mytheme_theme_support', 0 );

remove_filter('term_description','wpautop');

///// custom widget initialization

function widget_areas_function(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'<ul>',
            'after_widget'=>'</ul>',
            'name'=>'moj sajdbar',
            'id'=> 'sidebar-1',
            'description'=> 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'<ul>',
            'after_widget'=>'</ul>',
            'name'=>'lang',
            'id'=> 'sidebar-2',
            'description'=> 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'widget_areas_function');

//// breadcrumb

function custom_breadcrumb() {
    echo '<div class="breadcrumb">';
    
    // Home link
    echo '<a href="' . home_url() . '">Home</a> > ';
    
    // Check if it's a single post (e.g., blog post or custom post type)
    if (is_single()) {
        $categories = get_the_category();
        
        if ($categories) {
            $category = $categories[0];
            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> / ';
        }

        echo '<span>' . get_the_title() . '</span>';
    } elseif (is_category()) {
        // Category archive
        echo '<span>' . single_cat_title('', false) . '</span>';
    } elseif (is_page()) {
        // Page
        echo '<span>' . get_the_title() . '</span>';
    } elseif (is_home()) {
        // Blog page
        echo '<span>Blog</span>';
    } elseif (is_archive()) {
        // Archive (e.g., date, tag, author)
        echo '<span>' . get_the_archive_title() . '</span>';
    } elseif (is_search()) {
        // Search results page
        echo '<span>Search results for "' . get_search_query() . '"</span>';
    } elseif (is_404()) {
        // 404 page
        echo '<span>404 Not Found</span>';
    }

    echo '</div>';
}