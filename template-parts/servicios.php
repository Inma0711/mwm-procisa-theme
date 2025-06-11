<section id="servicios" class="servicios-section">
    <span id="nuestroTrabajo"></span>
    <div class="container">

        <h2 class="text-center">
            <?php 
            // Mostrar título desde ACF o texto por defecto
            $titulo = get_field('servicios_titulo');
            echo $titulo ? esc_html($titulo) : 'SERVICIOS';
            ?>
        </h2>

        <div class="icon-works">
            <?php 
            // Mostrar icono desde ACF o imagen por defecto del tema
            $icono = get_field('servicios_icono');
            if ($icono && is_array($icono)) {
                echo '<img src="' . esc_url($icono['url']) . '" alt="' . esc_attr($icono['alt']) . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/service_icon.png" alt="servicios">';
            }
            ?>
        </div>

        <p class="text-center lead">
            <?php 
            // Mostrar texto desde ACF o texto por defecto
            $texto = get_field('servicios_texto');
            echo $texto ? wp_kses_post($texto) : 'Ofrecemos a nuestros Clientes una gran experiencia y Know-How, implementando soluciones singulares y avanzadas, tanto en proyectos de <strong>Automatización, Control y Seguimiento</strong> de la Producción, como en <strong>Gestión de Procesos</strong>, aplicando los más modernos métodos y tecnologías. Esto implica un serio compromiso al asumir los retos y desafíos que puedan presentarse para conseguir juntos los objetivos estratégicos de nuestros Clientes.';
            ?>
        </p>

    </div>
</section>
