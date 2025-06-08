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

    <!-- Sección de servicios -->
    <?php get_template_part('template-parts/servicios'); ?>
    <?php get_template_part('template-parts/txtblock-servicios'); ?>
    <?php get_template_part('template-parts/carruselcertificados'); ?>

    <!-- Sección de sectores -->
    <?php get_template_part('template-parts/sectores'); ?>
    <?php get_template_part('template-parts/txtblock-sectores'); ?>
    <?php get_template_part('template-parts/carruselcertificados'); ?>

    <!-- Sección de nosotros -->
    <?php get_template_part('template-parts/nosotros'); ?>
    <?php get_template_part('template-parts/txtblock-nosotros'); ?>
    <?php get_template_part('template-parts/carruselcertificados'); ?>

    <!-- Sección de historia -->
    <?php get_template_part('template-parts/contact'); ?>
  

    </main>

<?php get_template_part('template-parts/footer'); ?>

</body>
</html>
