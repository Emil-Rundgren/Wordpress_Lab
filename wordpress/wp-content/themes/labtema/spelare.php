<?php
// Template name: spelare
?>

<?php get_header(); ?>

<div class="container my-5">
        <div class="col-md-8 mx-auto">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>
</div>

<?php get_footer(); ?>
