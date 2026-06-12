    <footer class="site-footer">
        <div class="footer-left">
            <strong>Toastmasters Aachen e. V.</strong>
            <p><?php echo t('Dein Rhetorik-Club in Aachen', 'Your Public Speaking Club in Aachen'); ?></p>
            <p class="footer-contact">
                <i class="far fa-envelope" aria-hidden="true"></i> <?php echo e(CONTACT_EMAIL); ?> &bull; 
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i> <?php echo e(LOCATION_SHORT); ?>
            </p>
        </div>
        <div class="footer-right">
            <div class="footer-socials" aria-label="<?php echo t('Social Media Kanäle', 'Social Media Channels'); ?>">
                <a href="https://www.meetup.com/de-DE/toastmasters-aachen/" target="_blank" rel="noopener" aria-label="<?php echo t('Meetup Gruppe', 'Meetup Group'); ?>"><i class="fab fa-meetup" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/toastmasters-aachen" target="_blank" rel="noopener" aria-label="<?php echo t('LinkedIn Profil', 'LinkedIn Profile'); ?>"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/toastmasters.aachen/" target="_blank" rel="noopener" aria-label="<?php echo t('Instagram Profil', 'Instagram Profile'); ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </div>
            <nav aria-label="<?php echo t('Rechtliches', 'Legal Information'); ?>" class="footer-nav">
                <a href="/impressum"><?php echo t('Impressum', 'Imprint'); ?></a>
                <a href="/datenschutz"><?php echo t('Datenschutz', 'Privacy Policy'); ?></a>
            </nav>
        </div>
    </footer>

    <!-- Lightbox Modal Container (Used globally by image gallery carousels) -->
    <div id="gallery-lightbox" class="lightbox-modal" aria-hidden="true" role="dialog">
        <button class="lightbox-close" aria-label="<?php echo t('Schließen', 'Close'); ?>">&times;</button>
        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="">
            <div id="lightbox-caption" class="lightbox-caption"></div>
        </div>
    </div>

    <script src="/assets/js/main.js?v=1.2" defer></script>
</body>

</html>
