<?php
function stepstyle_enqueue_styles() {
    wp_enqueue_style('stepstyle-main', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'stepstyle_enqueue_styles');
?>
