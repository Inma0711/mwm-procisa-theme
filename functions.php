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
        'procisa-services',
        get_template_directory_uri() . '/assets/css/services.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/services.css')
    );

    // Scripts
    $nav_js = get_template_directory() . '/js/navigation.js';
    if ( file_exists( $nav_js ) ) {
        wp_enqueue_script( 'procisa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'procisa_enqueue_assets' );


