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
    <?php get_template_part('template-parts/carruselservicios'); ?>

    <!-- Sección de sectores -->
    <?php get_template_part('template-parts/sectores'); ?>
    <?php get_template_part('template-parts/txtblock-sectores'); ?>
    <?php get_template_part('template-parts/carruselsectores'); ?>

    <!-- Sección de nosotros -->
    <?php get_template_part('template-parts/nosotros'); ?>
    <?php get_template_part('template-parts/txtblock-nosotros'); ?>
    <?php get_template_part('template-parts/carruselnosotros'); ?>

    <!-- Sección de historia -->
    <?php get_template_part('template-parts/historia'); ?>
    <?php get_template_part('template-parts/txtblock-historia'); ?>
    <?php get_template_part('template-parts/historialogos'); ?>

    <!-- Sección de contacto -->
    <?php get_template_part('template-parts/contacto'); ?>
  
    </main>

<?php get_template_part('template-parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
