<?php get_header(); ?>
<div class="container d-flex justify-content-center">
        <div class="mx-auto">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title()?></h1>
                <p><?php the_content()?></p>
                <?php endwhile; endif; ?>
        </div>
</div>
<?php get_footer(); ?>

<!-- Hur man lägger till en template till admin -->

<!-- Template name: Kontakt sida -->