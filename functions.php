<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Seguridad: evitar acceso directo
}

// Configuración de ACF
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Configuración del Tema',
        'menu_title' => 'Configuración del Tema',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

// Registrar campos ACF para las secciones
if (function_exists('acf_add_local_field_group')) {
    // Grupo de campos para la sección de Servicios
    acf_add_local_field_group(array(
        'key' => 'group_servicios',
        'title' => 'Sección de Servicios',
        'fields' => array(
            array(
                'key' => 'field_servicios_titulo',
                'label' => 'Título de Servicios',
                'name' => 'servicios_titulo',
                'type' => 'text',
                'instructions' => 'Edita el título de la sección de servicios',
                'default_value' => 'SERVICIOS',
            ),
            array(
                'key' => 'field_servicios_icono',
                'label' => 'Icono de Servicios',
                'name' => 'servicios_icono',
                'type' => 'image',
                'instructions' => 'Sube el icono para la sección de servicios',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_servicios_texto',
                'label' => 'Texto de Servicios',
                'name' => 'servicios_texto',
                'type' => 'wysiwyg',
                'instructions' => 'Edita el texto de la sección de servicios',
                'default_value' => 'Ofrecemos a nuestros Clientes una gran experiencia y Know-How, implementando soluciones singulares y avanzadas, tanto en proyectos de <strong>Automatización, Control y Seguimiento</strong> de la Producción, como en <strong>Gestión de Procesos</strong>, aplicando los más modernos métodos y tecnologías. Esto implica un serio compromiso al asumir los retos y desafíos que puedan presentarse para conseguir juntos los objetivos estratégicos de nuestros Clientes.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ));

    // Grupo de campos para la sección de Sectores
    acf_add_local_field_group(array(
        'key' => 'group_sectores',
        'title' => 'Sección de Sectores',
        'fields' => array(
            array(
                'key' => 'field_sectores_titulo',
                'label' => 'Título de Sectores',
                'name' => 'sectores_titulo',
                'type' => 'text',
                'instructions' => 'Edita el título de la sección de sectores',
                'default_value' => 'SECTORES',
            ),
            array(
                'key' => 'field_sectores_icono',
                'label' => 'Icono de Sectores',
                'name' => 'sectores_icono',
                'type' => 'image',
                'instructions' => 'Sube el icono para la sección de sectores',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_sectores_texto',
                'label' => 'Texto de Sectores',
                'name' => 'sectores_texto',
                'type' => 'wysiwyg',
                'instructions' => 'Edita el texto de la sección de sectores',
                'default_value' => 'Desde 1980, hemos sido capaces de diversificar nuestra labor, aplicando tecnologías verificadas y contrastadas en diferentes sectores industriales. Nos avalan entre otras certificaciones las específicas de líderes a nivel mundial en automatización como son <strong>SIEMENS y ROCKWELL AUTOMATION.</strong>',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ));

    // Grupo de campos para la sección de Historia
    acf_add_local_field_group(array(
        'key' => 'group_historia',
        'title' => 'Sección de Historia',
        'fields' => array(
            array(
                'key' => 'field_historia_titulo',
                'label' => 'Título de Historia',
                'name' => 'historia_titulo',
                'type' => 'text',
                'instructions' => 'Edita el título de la sección de historia',
                'default_value' => 'HISTORIA',
            ),
            array(
                'key' => 'field_historia_icono',
                'label' => 'Icono de Historia',
                'name' => 'historia_icono',
                'type' => 'image',
                'instructions' => 'Sube el icono para la sección de historia',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_historia_texto',
                'label' => 'Texto de Historia',
                'name' => 'historia_texto',
                'type' => 'wysiwyg',
                'instructions' => 'Edita el texto de la sección de historia',
                'default_value' => 'La constante evolución de los Sistemas de Control Industrial nos motiva para situarnos siempre en <strong>vanguardia</strong> y así afrontar nuevos retos con las mayores garantías de <strong>éxito</strong>. En sus 44 años de historia, <strong>PROCISA</strong> ha conseguido diversificar su participación en diferentes sectores industriales, siendo pieza clave para la consecución del éxito de numerosos proyectos. Estos son los principales <strong>Hitos en la Historia de la compañía.</strong>',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ));

    // Grupo de campos para la sección de Nosotros
    acf_add_local_field_group(array(
        'key' => 'group_nosotros',
        'title' => 'Sección de Nosotros',
        'fields' => array(
            array(
                'key' => 'field_nosotros_titulo',
                'label' => 'Título de Nosotros',
                'name' => 'nosotros_titulo',
                'type' => 'text',
                'instructions' => 'Edita el título de la sección de nosotros',
                'default_value' => 'NOSOTROS',
            ),
            array(
                'key' => 'field_nosotros_icono',
                'label' => 'Icono de Nosotros',
                'name' => 'nosotros_icono',
                'type' => 'image',
                'instructions' => 'Sube el icono para la sección de nosotros',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_nosotros_texto',
                'label' => 'Texto de Nosotros',
                'name' => 'nosotros_texto',
                'type' => 'wysiwyg',
                'instructions' => 'Edita el texto de la sección de nosotros',
                'default_value' => 'Nuestro equipo humano integra e incorpora la experiencia y conocimiento adquiridos durante 44 años por la compañía con las últimas innovaciones. Este conjunto de habilidades nos permite generar soluciones especificas para cada sector.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ));

    // Configuración de ACF para la página principal
    acf_add_local_field_group(array(
        'key' => 'group_front_page',
        'title' => 'Campos de la Página Principal',
        'fields' => array(
            // Campos para Servicios
            array(
                'key' => 'field_servicios_titulo',
                'label' => 'Título de Servicios',
                'name' => 'servicios_titulo',
                'type' => 'text',
                'instructions' => 'Ingrese el título de la sección de servicios',
                'required' => 0,
            ),
            array(
                'key' => 'field_servicios_icono',
                'label' => 'Icono de Servicios',
                'name' => 'servicios_icono',
                'type' => 'image',
                'instructions' => 'Seleccione el icono para la sección de servicios',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_servicios_texto',
                'label' => 'Texto de Servicios',
                'name' => 'servicios_texto',
                'type' => 'textarea',
                'instructions' => 'Ingrese el texto descriptivo de servicios',
                'required' => 0,
            ),
            // Campos para Sectores
            array(
                'key' => 'field_sectores_titulo',
                'label' => 'Título de Sectores',
                'name' => 'sectores_titulo',
                'type' => 'text',
                'instructions' => 'Ingrese el título de la sección de sectores',
                'required' => 0,
            ),
            array(
                'key' => 'field_sectores_icono',
                'label' => 'Icono de Sectores',
                'name' => 'sectores_icono',
                'type' => 'image',
                'instructions' => 'Seleccione el icono para la sección de sectores',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_sectores_texto',
                'label' => 'Texto de Sectores',
                'name' => 'sectores_texto',
                'type' => 'textarea',
                'instructions' => 'Ingrese el texto descriptivo de sectores',
                'required' => 0,
            ),
            // Campos para Historia
            array(
                'key' => 'field_historia_titulo',
                'label' => 'Título de Historia',
                'name' => 'historia_titulo',
                'type' => 'text',
                'instructions' => 'Ingrese el título de la sección de historia',
                'required' => 0,
            ),
            array(
                'key' => 'field_historia_icono',
                'label' => 'Icono de Historia',
                'name' => 'historia_icono',
                'type' => 'image',
                'instructions' => 'Seleccione el icono para la sección de historia',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_historia_texto',
                'label' => 'Texto de Historia',
                'name' => 'historia_texto',
                'type' => 'textarea',
                'instructions' => 'Ingrese el texto descriptivo de historia',
                'required' => 0,
            ),
            // Campos para Nosotros
            array(
                'key' => 'field_nosotros_titulo',
                'label' => 'Título de Nosotros',
                'name' => 'nosotros_titulo',
                'type' => 'text',
                'instructions' => 'Ingrese el título de la sección de nosotros',
                'required' => 0,
            ),
            array(
                'key' => 'field_nosotros_icono',
                'label' => 'Icono de Nosotros',
                'name' => 'nosotros_icono',
                'type' => 'image',
                'instructions' => 'Seleccione el icono para la sección de nosotros',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_nosotros_texto',
                'label' => 'Texto de Nosotros',
                'name' => 'nosotros_texto',
                'type' => 'textarea',
                'instructions' => 'Ingrese el texto descriptivo de nosotros',
                'required' => 0,
            ),
            // Campos para Contacto
            array(
                'key' => 'field_contacto_titulo',
                'label' => 'Título de Contacto',
                'name' => 'contacto_titulo',
                'type' => 'text',
                'instructions' => 'Ingrese el título de la sección de contacto',
                'required' => 0,
            ),
            array(
                'key' => 'field_contacto_icono',
                'label' => 'Icono de Contacto',
                'name' => 'contacto_icono',
                'type' => 'image',
                'instructions' => 'Seleccione el icono para la sección de contacto',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_contacto_texto',
                'label' => 'Texto de Contacto',
                'name' => 'contacto_texto',
                'type' => 'textarea',
                'instructions' => 'Ingrese el texto descriptivo de contacto',
                'required' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
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
        'procisa-sectores',
        get_template_directory_uri() . '/assets/css/sectores.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/sectores.css')
    );
    wp_enqueue_style(
        'procisa-historia',
        get_template_directory_uri() . '/assets/css/historia.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/historia.css')
    );
    wp_enqueue_style(
        'procisa-nosotros',
        get_template_directory_uri() . '/assets/css/nosotros.css',
        array('procisa-style'),
        filemtime(get_template_directory() . '/assets/css/nosotros.css')
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
    wp_enqueue_script('jquery');

    // Script para el nav
    wp_enqueue_script(
        'procisa-nav-scroll',
        get_template_directory_uri() . '/assets/js/nav-scroll.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/nav-scroll.js'),
        true
    );

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


