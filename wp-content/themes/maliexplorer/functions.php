<?php
/**
 * MaliExplorer functions and definitions
 *
 * @package MaliExplorer
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!function_exists('maliexplorer_setup')) :
    /**
     * Configuration initiale du thème.
     */
    function maliexplorer_setup() {
        // Chargement du domaine de traduction
        load_theme_textdomain('maliexplorer', get_template_directory() . '/languages');

        // Titre de page dynamique géré par WordPress
        add_theme_support('title-tag');

        // Prise en charge des images à la une
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 675, true); // 16:9 ratio standard
        add_image_size('maliexplorer-card', 600, 400, true);
        add_image_size('maliexplorer-mockup', 800, 1000, false);

        // Logo personnalisable via l'outil de personnalisation WordPress
        add_theme_support('custom-logo', array(
            'height'      => 90,
            'width'       => 280,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        // Balisage HTML5 sémantique
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Prise en charge des vidéos et iframes réactifs
        add_theme_support('responsive-embeds');

        // Enregistrement des emplacements de menus de navigation
        register_nav_menus(array(
            'primary' => esc_html__('Menu Principal (En-tête)', 'maliexplorer'),
            'footer'  => esc_html__('Menu Pied de page', 'maliexplorer'),
        ));
    }
endif;
add_action('after_setup_theme', 'maliexplorer_setup');

/**
 * Définition de la largeur de contenu globale WordPress
 */
function maliexplorer_content_width() {
    $GLOBALS['content_width'] = apply_filters('maliexplorer_content_width', 1200);
}
add_action('after_setup_theme', 'maliexplorer_content_width', 0);

/**
 * Enregistrement et chargement des styles et scripts.
 */
function maliexplorer_scripts() {
    // Google Fonts : Playfair Display + Plus Jakarta Sans
    wp_enqueue_style(
        'maliexplorer-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Feuille de style principale du thème (style.css)
    wp_enqueue_style(
        'maliexplorer-style',
        get_stylesheet_uri(),
        array('maliexplorer-fonts'),
        wp_get_theme()->get('Version')
    );

    // Script interactif (burger menu, sticky header, smooth scroll)
    wp_enqueue_script(
        'maliexplorer-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Support des commentaires imbriqués si nécessaire
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'maliexplorer_scripts');

/**
 * Enregistrement des zones de widgets (Pied de page et barre latérale).
 */
function maliexplorer_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Pied de page - Colonne 1', 'maliexplorer'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Ajoutez des widgets ici pour la première colonne du footer.', 'maliexplorer'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Pied de page - Colonne 2', 'maliexplorer'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Ajoutez des widgets ici pour la deuxième colonne du footer.', 'maliexplorer'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'maliexplorer_widgets_init');

/**
 * Fonction d'aide pour récupérer l'URL d'une image d'asset avec fallback
 */
function maliexplorer_asset_url($filename) {
    return esc_url(get_template_directory_uri() . '/assets/images/' . $filename);
}

