<?php
// Registrera en menyplats
function register_custom_menus() {
    register_nav_menu('header-menu', __('Header menu'));
    register_nav_menu('undersida-meny', __('Meny Undersida'));
}
add_action('init', 'register_custom_menus');

// Registrera widgetområden
// Widget 1, spotify 
function my_theme_register_sidebar()
{
register_sidebar(array(
'name' => 'Manchester United Podcast',
'id' => 'manchester-united-podcast',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
));
register_sidebar(array(
'name' => 'Sidomeny',
'id' => 'sidomeny',
'before_widget' => '<div class="sidomeny">',
'after_widget' => '</div>',
'before_title' => '<h3 class="sidomeny-title">',
'after_title' => '</h3>',
));
}
add_action('widgets_init', 'my_theme_register_sidebar');
