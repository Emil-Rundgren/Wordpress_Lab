<?php get_header(); ?>

<div class="container my-5">
    <h1 class="mb-4">Bloggsida</h1>
    <div class="column">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-10 mb-4">
                    <div class="card h-100">
                        <!-- Bild som visas för alla inlägg -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/standardblogg.jpg" class="card-img-top p-4 pb-0" alt="En standardbild">

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

                            <!-- Sammanfattning -->
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- Paginering -->
            <?php get_template_part('pagination'); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>