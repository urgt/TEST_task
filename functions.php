<?php

function enqueue_custom_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts()
{
    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/index.js', array(), false, array('strategy' => 'defer'));
}