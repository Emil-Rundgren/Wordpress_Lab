<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <!-- Huvudinnehåll -->
        <div class="col-md-8">
            <h1 class="mb-4 mx-auto">Sökresultat för "<?php echo esc_html(get_search_query()); ?>"</h1>
            <div class="column">
                <!-- Inlägg -->
                <?php get_template_part('content'); ?>
                <!-- Paginering -->
                <?php get_template_part('pagination'); ?>
            </div>
        </div>

        <!-- Sidomeny -->
        <?php get_template_part('sidomeny'); ?>
    </div>
</div>

<?php get_footer(); ?>