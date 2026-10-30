<?php
/**
 * The template for displaying all single posts
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
        <!-- En-tête de l'article -->
        <header class="page-hero-header">
            <div class="container">
                <div class="page-meta-breadcrumbs">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Accueil', 'maliexplorer'); ?></a> 
                    <span>/</span> 
                    <span><?php the_category(', '); ?></span>
                </div>
                <h1 class="page-hero-title"><?php the_title(); ?></h1>
                
                <div class="entry-meta-bar">
                    <span class="posted-on">
                        📅 <?php echo esc_html(get_the_date()); ?>
                    </span>
                    <span class="byline">
                        ✍️ <?php esc_html_e('Par', 'maliexplorer'); ?> <?php the_author(); ?>
                    </span>
                </div>
            </div>
        </header>

        <!-- Contenu de l'article -->
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

                <!-- Navigation Article Précédent / Suivant -->
                <nav class="post-nav-links" aria-label="<?php esc_attr_e('Navigation des articles', 'maliexplorer'); ?>">
                    <div class="nav-previous">
                        <?php previous_post_link('%link', '&larr; %title'); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_post_link('%link', '%title &rarr;'); ?>
                    </div>
                </nav>

                <?php
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

