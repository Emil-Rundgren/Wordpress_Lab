<?php
// Template name: Om oss
?>

<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <!-- Innehåll - Vänster -->
        <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>
        
        <!-- Bild - Höger -->
        <div class="col-md-4 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/antony.jpg" class="img-fluid rounded" alt="En standardbild">
        </div>
    </div>
</div>

<?php get_footer(); ?>
