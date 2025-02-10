<?php
function stepstyle_theme_setup() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('woocommerce');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'stepstyle'),
        'footer' => __('Footer Menu', 'stepstyle'),
    ));
}
add_action('after_setup_theme', 'stepstyle_theme_setup');

function stepstyle_enqueue_assets() {
    wp_enqueue_style('stepstyle-main-css', get_stylesheet_uri());
    wp_enqueue_style('stepstyle-custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_script('stepstyle-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'stepstyle_enqueue_assets');

function stepstyle_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'stepstyle'),
        'id' => 'footer-widget',
        'description' => __('Widgets in this area will be shown in the footer.', 'stepstyle'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'stepstyle_widgets_init');

function stepstyle_remove_wp_version() {
    return '';
}
add_filter('the_generator', 'stepstyle_remove_wp_version');

function stepstyle_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'stepstyle_woocommerce_support');
?>
