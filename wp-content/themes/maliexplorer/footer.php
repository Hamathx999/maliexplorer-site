<?php
/**
 * Footer template for MaliExplorer (Vert Forêt & Or)
 *
 * @package MaliExplorer
 * @version 1.1.0
 */
?>
    </main><!-- #primary -->

    <!-- Pied de Page Vert Forêt Profond -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-grid">
                <!-- Colonne 1 : Logo & Présentation -->
                <div>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-text-logo" style="margin-bottom: 1.25rem;">
                        <span class="brand-symbol-gold" aria-hidden="true">M</span>
                        <span>Mali<span class="brand-highlight-gold">Explorer</span></span>
                    </a>
                    <p style="font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem; color: #D1D5DB;">
                        <?php esc_html_e("Plateforme numérique de référence pour la valorisation, la sauvegarde et le rayonnement touristique du patrimoine culturel malien.", 'maliexplorer'); ?>
                    </p>
                    <div style="font-size: 0.8125rem; color: var(--color-gold); font-weight: 600;">
                        🇲🇱 <?php esc_html_e('Fait avec passion pour le Mali', 'maliexplorer'); ?>
                    </div>
                </div>

                <!-- Colonne 2 : Liens Utiles -->
                <div>
                    <h4 class="footer-title"><?php esc_html_e('Liens Utiles', 'maliexplorer'); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/#hero')); ?>"><?php esc_html_e('Accueil', 'maliexplorer'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/#categories')); ?>"><?php esc_html_e('Découvrir les Modules', 'maliexplorer'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/#immersion360')); ?>"><?php esc_html_e('Immersion 360°', 'maliexplorer'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/#how-it-works')); ?>"><?php esc_html_e('À propos du projet', 'maliexplorer'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/#download')); ?>"><?php esc_html_e('Télécharger l\'application', 'maliexplorer'); ?></a></li>
                    </ul>
                </div>

                <!-- Colonne 3 : Réseaux Sociaux -->
                <div>
                    <h4 class="footer-title"><?php esc_html_e('Suivez-nous', 'maliexplorer'); ?></h4>
                    <p style="font-size: 0.875rem; margin-bottom: 1rem; color: #D1D5DB;">
                        <?php esc_html_e('Rejoignez notre communauté sur les réseaux sociaux :', 'maliexplorer'); ?>
                    </p>
                    <div class="social-icons-row">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Facebook">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Instagram">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="YouTube">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Colonne 4 : Newsletter -->
                <div>
                    <h4 class="footer-title"><?php esc_html_e('Restez informé', 'maliexplorer'); ?></h4>
                    <p style="font-size: 0.875rem; margin-bottom: 1rem; color: #D1D5DB;">
                        <?php esc_html_e('Recevez nos actualités culturelles et les nouvelles fonctionnalités.', 'maliexplorer'); ?>
                    </p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Merci pour votre inscription !');">
                        <input type="email" required placeholder="<?php esc_attr_e('Votre adresse e-mail', 'maliexplorer'); ?>" class="newsletter-input">
                        <button type="submit" class="btn-gold" style="width: 100%;">
                            <span><?php esc_html_e("S'abonner", 'maliexplorer'); ?></span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Bas de page -->
            <div class="footer-bottom">
                <div>
                    &copy; <?php echo esc_html(date_i18n('Y')); ?> <strong>MaliExplorer</strong>. <?php esc_html_e('Tous droits réservés.', 'maliexplorer'); ?>
                </div>
                <div style="display: flex; gap: 1.5rem;">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Accueil', 'maliexplorer'); ?></a>
                    <a href="<?php echo esc_url(home_url('/#categories')); ?>"><?php esc_html_e('Modules', 'maliexplorer'); ?></a>
                    <a href="<?php echo esc_url(home_url('/#download')); ?>"><?php esc_html_e('Téléchargement', 'maliexplorer'); ?></a>
                </div>
            </div>
        </div>
    </footer>
</div><!-- .site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
