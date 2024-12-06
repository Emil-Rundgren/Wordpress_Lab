<?php get_header();?>
<!-- Hero-sektion -->
<div class="hero bg-light text-center text-white mx-auto col-8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/oldtrafford.jpg');">
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div>
            <h1 class="display-4 fw-bold">Hej och välkommen!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
        </div>
    </div>
</div>
<?php get_footer();?>

<style>
.hero {
    background-size: cover;
    background-position: center;
    height: 65vh;
    color: white;
    position: relative;
}

.hero h1 {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.hero p {
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);
}
</style>