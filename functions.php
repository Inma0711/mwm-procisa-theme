<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Seguridad: evitar acceso directo
}

// Cargar texto de traducciones (si usas idiomas)
function procisa_theme_setup() {
    load_theme_textdomain( 'mwm-procisa-theme', get_template_directory() . '/languages' );

    // Activar soporte para título automático y thumbnails
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Registrar menús
    register_nav_menus(array(
        'primary' => __( 'Menú Principal', 'mwm-procisa-theme' ),
        'footer'  => __( 'Menú Footer', 'mwm-procisa-theme' ),
    ));
}
add_action( 'after_setup_theme', 'procisa_theme_setup' );

// Registrar área de widgets
function procisa_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Sidebar Principal', 'mwm-procisa-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Añade widgets aquí.', 'mwm-procisa-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'procisa_widgets_init' );

// Encolar estilos y scripts
function procisa_enqueue_assets() {
    // Estilos
    wp_enqueue_style( 'procisa-style', get_stylesheet_uri() );
    wp_enqueue_style(
        'procisa-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/header.css')
    );
    wp_enqueue_style(
        'procisa-nav',
        get_template_directory_uri() . '/assets/css/nav.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/nav.css')
    );
    wp_enqueue_style(
        'procisa-servicios',
        get_template_directory_uri() . '/assets/css/servicios.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/servicios.css')
    );
    wp_enqueue_style(
        'procisa-txtblock-servicios',
        get_template_directory_uri() . '/assets/css/txtblock-servicios.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/txtblock-servicios.css')
    );
    wp_enqueue_style(
        'procisa-contacto',
        get_template_directory_uri() . '/assets/css/contacto.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/contacto.css')
    );
    wp_enqueue_style(
        'procisa-carrusel',
        get_template_directory_uri() . '/assets/css/carrusel.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/carrusel.css')
    );
    wp_enqueue_style(
        'procisa-sectores',
        get_template_directory_uri() . '/assets/css/sectores.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/sectores.css')
    );
    wp_enqueue_style(
        'procisa-nosotros',
        get_template_directory_uri() . '/assets/css/nosotros.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/nosotros.css')
    );
    wp_enqueue_style(
        'procisa-historialogos',
        get_template_directory_uri() . '/assets/css/historialogos.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/historialogos.css')
    );

    // Estilos de Owl Carousel
    wp_enqueue_style(
        'owl-carousel-core',
        get_template_directory_uri() . '/assets/lib/owl-carousel/owl.carousel.min.css',
        array(),
        '2.3.4'
    );
    wp_enqueue_style(
        'owl-carousel-theme',
        get_template_directory_uri() . '/assets/lib/owl-carousel/owl.theme.default.min.css',
        array('owl-carousel-core'),
        '2.3.4'
    );

    // Estilos de Footer
    wp_enqueue_style(
        'procisa-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    // Scripts
    // Asegúrate de que jQuery esté cargado. WordPress lo carga por defecto.
    wp_enqueue_script('jquery');

    // Scripts de Owl Carousel
    wp_enqueue_script(
        'owl-carousel-js',
        get_template_directory_uri() . '/assets/lib/owl-carousel/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true // Carga el script en el footer
    );

    $nav_js = get_template_directory() . '/js/navigation.js';
    if ( file_exists( $nav_js ) ) {
        wp_enqueue_script( 'procisa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );
    }
    $nav_scroll_js = get_template_directory() . '/assets/js/nav-scroll.js';
    if ( file_exists( $nav_scroll_js ) ) {
        wp_enqueue_script( 'procisa-nav-scroll', get_template_directory_uri() . '/assets/js/nav-scroll.js', array('jquery', 'owl-carousel-js'), '1.0', true );
    }

    // Script personalizado para el carrusel
    wp_enqueue_script(
        'procisa-carrusel',
        get_template_directory_uri() . '/assets/js/carrusel.js',
        array('jquery', 'owl-carousel-js'),
        filemtime(get_template_directory() . '/assets/js/carrusel.js'),
        true // Carga el script en el footer
    );

    // Script para el slider del header
    wp_enqueue_script(
        'procisa-header-slider',
        get_template_directory_uri() . '/assets/js/header-slider.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/header-slider.js'),
        true // Carga el script en el footer
    );
}
add_action( 'wp_enqueue_scripts', 'procisa_enqueue_assets' );


