<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <!-- Huvudinnehåll -->
        <div class="col-md-8">
            <h1 class="mb-4">Bloggsida</h1>
            <div class="column">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12 mb-4">
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

                                    <!-- Sammanfattning -->
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <!-- Paginering -->
                    <?php get_template_part('pagination'); ?>

                <?php else : ?>
                    <p>Inga inlägg hittades.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Sidomeny -->
        <div class="col-md-4">
            <?php if (is_active_sidebar('sidomeny')) : ?>
                <aside id="secondary" class="sidomeny bg-dark text-white p-3 rounded">
                    <?php dynamic_sidebar('sidomeny'); ?>
                </aside>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>

/* Länkar i sidomenyn */
.sidomeny a {
    color: #fff; /* Vit text */
    text-decoration: none; /* Ta bort understrykning */
    margin-bottom: 10px; /* Avstånd mellan länkar */
    font-size: 16px;
    display: block;
}

.sidomeny a:hover {
    color: #dc3545; /* Röd hover-färg */
    text-decoration: underline;
}

/* Knapp i sidomeny */
.sidomeny button {
    background-color: #dc3545;
    color: #fff;
    border: border: 1px solid #dc3545;
}

</style>

<?php get_footer(); ?>