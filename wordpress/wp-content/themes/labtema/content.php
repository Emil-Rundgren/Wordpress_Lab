<?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-10 mx-auto mb-4">
                            <div class="card h-100">
                                <!-- Bild som visas för alla inlägg -->
                                <img src="<?php echo get_template_directory_uri(); ?>/images/antony.jpg" class="card-img-top p-4 pb-0" alt="En standardbild">

                                <!-- Kortens text och post-meta -->
                                <div class="card-body">
                                    <!-- Titel -->
                                    <h2 class="card-title">
                                        <a class="fs-3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <!-- Post-meta: Datum, Författare och Kategori -->
                                    <div class="post-meta d-flex justify-content-start align-items-center mb-3">
                                        <!-- Datum -->
                                        <span class="post-date me-3 fw-semibold">
                                            <i class="bi bi-calendar"></i> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')) ?>"><?php echo get_the_date(); ?></a>
                                        </span>

                                        <!-- Författare -->
                                        <span class="post-author me-3 fw-semibold">
                                            <i class="bi bi-person"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                        </span>

                                        <!-- Kategori -->
                                        <span class="post-categories fw-semibold">
                                            <i class="bi bi-folder"></i> <?php the_category(', '); ?>
                                        </span>
                                    </div>

                                    <!-- Sammanfattning -->
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Inga inlägg hittades.</p>
<?php endif; ?>

<style>
/* Gör alla länkar i menyn vita */
a {
    color: #212529; /* Vit färg för text */
    text-decoration: none; /* Ta bort understrykning */
}

/* Optional: Hover-effekt */
a:hover {
    color: #dc3545; /* Ljussare vit färg vid hover */
    text-decoration: underline; /* Lägg till linje vid hover */
}
</style>