<?php get_header(); ?>

<div class="container my-5">
    <h1 class="mb-4">Bloggsida</h1>
    <div class="column">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-10 mb-4">
                <div class="card h-100">
                    <!-- Bild som visas för alla inlägg -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/standardblogg.jpg" class="card-img-top" alt="En standardbild">
                    <!-- Kortens text tagen från sidans inlägg -->
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Läs mer</a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>