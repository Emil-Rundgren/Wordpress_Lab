<?php
// Registrera en menyplats
function register_custom_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'textdomain'), // Meny för header
    ));
}
add_action('init', 'register_custom_menus');

