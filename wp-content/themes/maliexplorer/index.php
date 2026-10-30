<?php
/**
 * The main template file
 *
 * @package MaliExplorer
 * @version 1.0.0
 */

get_header();
?>

<header class="page-hero-header">
    <div class="container">
        <h1 class="page-hero-title"><?php esc_html_e('Actualités & Découvertes', 'maliexplorer'); ?></h1>
        <p class="section-subtitle"><?php esc_html_e('Les derniers articles et explorations du patrimoine malien', 'maliexplorer'); ?></p>
    </div>
</header>

<div class="section section-tint">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="showcase-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('showcase-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="showcase-img-wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('maliexplorer-card'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="showcase-info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div style="font-size: 0.8125rem; color: var(--color-muted); margin-bottom: 0.85rem;">
                                📅 <?php echo esc_html(get_the_date()); ?>
                            </div>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="feature-card-link" style="margin-top: auto;">
                                <span><?php esc_html_e('Lire l\'article', 'maliexplorer'); ?></span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <div style="margin-top: 3.5rem; text-align: center;">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '&larr; ' . esc_html__('Précédent', 'maliexplorer'),
                    'next_text' => esc_html__('Suivant', 'maliexplorer') . ' &rarr;',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="entry-content" style="text-align: center; padding: 4rem 0;">
                <h2><?php esc_html_e('Aucun contenu trouvé', 'maliexplorer'); ?></h2>
                <p><?php esc_html_e('Aucun article n\'a été publié pour le moment. Revenez bientôt !', 'maliexplorer'); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 1.5rem;">
                    <?php esc_html_e('Retour à l\'accueil', 'maliexplorer'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();

