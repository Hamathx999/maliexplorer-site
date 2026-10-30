<?php
/**
 * Header template for MaliExplorer (Vert Forêt & Or)
 *
 * @package MaliExplorer
 * @version 1.1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-wrapper">
    <!-- En-tête Principal Fixe Vert Sombre -->
    <header class="site-header" role="banner">
        <div class="container header-container">
            <!-- Branding / Logo -->
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-text-logo" rel="home">
                        <span class="brand-symbol-gold" aria-hidden="true">M</span>
                        <span>Mali<span class="brand-highlight-gold">Explorer</span></span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Navigation Desktop -->
            <nav class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Navigation principale', 'maliexplorer'); ?>">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                } else {
                    echo '<ul class="nav-menu">';
                    echo '<li><a href="' . esc_url(home_url('/#hero')) . '">' . esc_html__('Accueil', 'maliexplorer') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#categories')) . '">' . esc_html__('Fonctionnalités', 'maliexplorer') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#immersion360')) . '">' . esc_html__('Immersion 360°', 'maliexplorer') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#how-it-works')) . '">' . esc_html__('À propos', 'maliexplorer') . '</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>

            <!-- Actions Header (CTA & Burger) -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="<?php echo esc_url(home_url('/#download')); ?>" class="btn-gold header-cta-desktop" style="padding: 0.6rem 1.4rem; font-size: 0.875rem;">
                    <span><?php esc_html_e("Télécharger l'application", 'maliexplorer'); ?></span>
                </a>

                <button type="button" class="mobile-toggle" aria-controls="mobile-nav-drawer" aria-expanded="false" aria-label="<?php esc_attr_e('Menu', 'maliexplorer'); ?>">
                    <svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Tiroir Mobile -->
    <div id="mobile-nav-drawer" class="mobile-nav-drawer" style="display: none; padding-top: 90px;">
        <nav role="navigation">
            <ul class="mobile-nav-menu">
                <li><a href="<?php echo esc_url(home_url('/#hero')); ?>"><?php esc_html_e('Accueil', 'maliexplorer'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/#categories')); ?>"><?php esc_html_e('Fonctionnalités', 'maliexplorer'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/#immersion360')); ?>"><?php esc_html_e('Immersion 360°', 'maliexplorer'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/#how-it-works')); ?>"><?php esc_html_e('À propos', 'maliexplorer'); ?></a></li>
            </ul>
        </nav>
        <a href="<?php echo esc_url(home_url('/#download')); ?>" class="btn-gold" style="width: 100%;">
            <span><?php esc_html_e("Télécharger l'application", 'maliexplorer'); ?></span>
        </a>
    </div>

    <main id="primary" class="site-main">
