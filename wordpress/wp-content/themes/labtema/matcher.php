<?php
// Template name: matcher
?>

<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <!-- Innehåll - Vänster -->
        <div class="col-md-4">
            <aside class="bg-dark text-white p-3 rounded">
                <h3>Undersidor</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'undersida-meny', // Skapa en menyplats med detta namn
                    'menu_class' => 'nav flex-column',
                    'container' => false,
                ));
                ?>
            </aside>
        </div>
        <!-- Meny - Höger -->
        <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
