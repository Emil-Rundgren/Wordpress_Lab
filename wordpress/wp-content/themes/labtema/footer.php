<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <!-- Rad för huvudsektionerna i footern -->
        <div class="row">
            <!-- Kolumn: Kort om oss -->
            <div class="col-md-4">
                <h5>Kort om oss</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
            </div>

            <!-- Kolumn: Kontaktuppgifter -->
            <div class="col-md-4 mb-0">
                <h5>Kontaktuppgifter</h5>
                <p>The Company</p>
                <p>Gatgatan 1</p>
                <p>123 45 Någonstans</p>
                <p>Tel: 0123456789</p>
                <p>E-post: <a href="mailto:info@thecompany.com" class="text-danger">info@thecompany.com</a></p>
            </div>

            <!-- Kolumn: Sociala medier -->
            <div class="col-md-4">
                <h5>Social media</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-danger"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a href="#" class="text-danger"><i class="bi bi-twitter"></i> Twitter</a></li>
                    <li><a href="#" class="text-danger"><i class="bi bi-instagram"></i> Instagram</a></li>
                    <li><a href="#" class="text-danger"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <!-- Rad för copyright-text -->
        <div class="row mt-3">
            <div class="col text-center">
                <p class="m-0">Copyright © Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>

<style>
footer ul li {
    margin-bottom: 5px; /* Mellanrum mellan sociala medier-länkar */
}

p, a {
font-size: 14px;
margin-bottom: 0;
}
</style>

<!-- Hook for WordPress script tags -->
<?php wp_footer(); ?>
</body>
</html>