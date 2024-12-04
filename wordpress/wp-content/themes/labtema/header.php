<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- Hook for WordPress head (meta) tags -->
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<!-- Header -->
<header class="bg-danger text-white">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <!-- Titel -->
        <h1 class="m-0">Labb 1</h1>

        <!-- Sökfält -->
        <?php get_search_form()?>
    </div>
</header>

<!-- Meny -->
<nav class="bg-dark">
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
            'menu_class' => 'nav justify-content-around',
        ));
        ?>
    </div>
</nav>

<style>
/* Gör alla länkar i menyn vita */
.nav a {
    color: white; /* Vit färg för text */
    text-decoration: none; /* Ta bort understrykning */
}

/* Optional: Hover-effekt */
.nav a:hover {
    color: #ddd; /* Ljussare vit färg vid hover */
    text-decoration: underline; /* Lägg till linje vid hover */
}
</style>
