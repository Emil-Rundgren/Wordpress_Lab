<?php
// Hämtar WordPress-headern
get_header();
?>

<div class="container text-center py-5">
    <h1 class="display-4 text-danger fw-bold mb-3">404 - Sidan kunde inte hittas</h1>
    <p class="lead mb-4">Tyvärr kunde vi inte hitta sidan du letade efter. Klicka på knappen nedan för att gå tillbaka till startsidan.</p>
    <!-- Knappen som leder tillbaka till startsidan -->
    <a href="<?php echo home_url(); ?>" class="btn btn-danger btn-lg">Tillbaka till startsidan</a>
</div>

<?php
// Hämtar WordPress-footern
get_footer();
?>
