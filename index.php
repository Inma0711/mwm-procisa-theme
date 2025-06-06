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

    <?php get_template_part('template-parts/services'); ?>

    </main>

<?php get_template_part('template-parts/footer'); ?>

</body>
</html>
