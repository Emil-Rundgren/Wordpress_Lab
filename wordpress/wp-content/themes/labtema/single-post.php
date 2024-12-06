<?php get_header(); ?>

<div class="container my-5">
    <h1 class="mb-4 text-center"><?php the_title()?></h1>
    <div class="column">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-6 mx-auto">
            <div class="card h-100">
    <!-- Bild som visas för alla inlägg -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/antony.jpg" class="card-img-top p-4 pb-0" alt="En standardbild">

    <!-- Kortens text och post-meta -->
    <div class="card-body">
        <!-- Titel -->
        <h2 class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <!-- Post-meta: Datum, Författare och Kategori -->
        <div class="post-meta d-flex justify-content-start align-items-center mb-3">
            <!-- Datum -->
            <span class="post-date me-3">
                <i class="bi bi-calendar"></i> <?php the_date(); ?>
            </span>

            <!-- Författare -->
            <span class="post-author me-3">
                <i class="bi bi-person"></i> <?php the_author(); ?>
            </span>

            <!-- Kategori -->
            <span class="post-categories">
                <i class="bi bi-folder"></i> <?php the_category(', '); ?>
            </span>
        </div>

        <!-- Innehåll -->
        <p class="card-text"><?php the_content(); ?></p>
    </div>
</div>

            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>