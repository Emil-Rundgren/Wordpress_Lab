<!-- Paginering -->
<div class="pagination d-flex justify-content-center gap-3 mt-4">
    <?php
        echo paginate_links(array(
        'prev_text' => '<span class="btn btn-danger">Föregående</span>',
        'next_text' => '<span class="btn btn-danger">Nästa</span>',
        'before_page_number' => '<span class="btn btn-outline-danger">',
        'after_page_number' => '</span>',
        ));
    ?>
 </div>