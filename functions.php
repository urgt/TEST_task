<?php

// styles
function enqueue_custom_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// scripts
function enqueue_custom_scripts()
{
    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/index.js', array(), false, array('strategy' => 'defer'));
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_theme_support('post-thumbnails');

function register_news_post_type() {
    $labels = array(
        'name'               => _x( 'Новости', 'post type general name', 'test-task' ),
        'singular_name'      => _x( 'Новость', 'post type singular name', 'test-task' ),
        'menu_name'          => _x( 'Новости', 'admin menu', 'test-task' ),
        'name_admin_bar'     => _x( 'Новость', 'add new on admin bar', 'test-task' ),
        'add_new'            => _x( 'Добавить новую', 'новость', 'test-task' ),
        'add_new_item'       => __( 'Добавить новую новость', 'test-task' ),
        'new_item'           => __( 'Новая новость', 'test-task' ),
        'edit_item'          => __( 'Редактировать новость', 'test-task' ),
        'view_item'          => __( 'Просмотреть новость', 'test-task' ),
        'all_items'          => __( 'Все новости', 'test-task' ),
        'search_items'       => __( 'Искать новости', 'test-task' ),
        'parent_item_colon'  => __( 'Родительские новости:', 'test-task' ),
        'not_found'          => __( 'Новостей не найдено.', 'test-task' ),
        'not_found_in_trash' => __( 'Новостей в корзине не найдено.', 'test-task' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'  )
    );

    register_post_type( 'news', $args );
}

add_action('init', 'register_news_post_type');

function register_my_menus() {
    register_nav_menus( array(
        'main-menu' => __( 'Основное меню', 'test-task' ),
    ) );
}

add_action( 'init', 'register_my_menus' );