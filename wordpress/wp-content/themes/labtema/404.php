<?php
// Hämtar WordPress-headern
get_header();
?>

<div style="text-align: center; padding: 50px;">
    <h1>404 - Sidan kunde inte hittas</h1>
    <p>Tyvärr kunde vi inte hitta sidan du letade efter. Klicka på knappen nedan för att gå tillbaka till startsidan.</p>
    <!-- Knappen som leder tillbaka till startsidan -->
    <button onclick="location.href='<?php echo home_url(); ?>'" style="padding: 10px 20px; background-color: #0073aa; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Tillbaka till startsidan</button>
</div>

<?php
// Hämtar WordPress-footern
get_footer();
?>