<div class="col-md-4 mt-3 mt-md-0">
    <?php if (is_active_sidebar('sidomeny')) : ?>
        <aside id="secondary" class="sidomeny bg-dark text-white p-3 rounded">
            <?php dynamic_sidebar('sidomeny'); ?>
        </aside>
    <?php endif; ?>
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