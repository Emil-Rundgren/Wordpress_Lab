<?php
// Registrera en menyplats
function register_custom_menus() {
    register_nav_menu('header-menu', __('Header menu'));
}
add_action('init', 'register_custom_menus');

?>