<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- Hook for WordPress head (meta) tags -->
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- Meny/Nav -->
<?php
wp_nav_menu(array(
    'theme_location' => 'header-menu', // Identifieraren för menyplatsen
    'container' => 'nav',             // Omsluter menyn i ett <nav>-element
    'container_class' => 'header-menu', // Klass för <nav>-elementet
    'menu_class' => 'menu'           // Klass för <ul>-elementet
));
?>

<!-- Sökfält -->
<?php get_search_form(); ?>