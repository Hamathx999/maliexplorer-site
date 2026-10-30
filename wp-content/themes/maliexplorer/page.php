<?php
/**
 * The template for displaying all single pages
 *
 * @package MaliExplorer
 * @version 1.0.0
 */

get_header();
?>

<?php
while (have_posts()) :
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- En-tête de page -->
        <header class="page-hero-header">
            <div class="container">
                <div class="page-meta-breadcrumbs">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Accueil', 'maliexplorer'); ?></a> 
                    <span>/</span> 
                    <span><?php the_title(); ?></span>
                </div>
                <h1 class="page-hero-title"><?php the_title(); ?></h1>
            </div>
        </header>

        <!-- Contenu de la page -->
        <div class="content-article-wrapper">
            <div class="container">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-featured-media">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'maliexplorer'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php
                // Si les commentaires sont ouverts
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </div>
    </article>
<?php
endwhile;
?>

<?php
get_footer();

