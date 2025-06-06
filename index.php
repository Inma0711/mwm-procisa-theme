<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/nav'); ?>

    <main id="primary" class="site-main container">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <nav class="post-navigation">
                <?php the_posts_navigation(); ?>
            </nav>

        <?php else : ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h2>No se han encontrado contenidos</h2>
                </header>
                <div class="page-content">
                    <p>Intenta buscar algo diferente o vuelve más tarde.</p>
                </div>
            </section>
        <?php endif; ?>

    </main>

<?php get_template_part('template-parts/footer'); ?>

</body>
</html>
