<!-- Anpassar get_search_form() i header -->
<form role="search" method="get" class="d-flex" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="form-control me-2" placeholder="Sök" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search">
    <button class="btn btn-dark" type="submit">Sök</button>
</form>