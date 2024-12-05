<?php
// Registrera en menyplats
function register_custom_menus() {
    register_nav_menu('header-menu', __('Header menu'));
}
add_action('init', 'register_custom_menus');

// Registrera widgetområdet
function my_theme_register_sidebar()
{
register_sidebar(array(
'name' => 'emils första widget',
'id' => 'emils-first-widget',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
));
}
add_action('widgets_init', 'my_theme_register_sidebar');
