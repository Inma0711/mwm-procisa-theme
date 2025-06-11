<section id="servicios">
<span id="nuestroTrabajo"></span>
    <div class="container">
        <h2 class="text-center">SERVICIOS</h2>
        <div class="icon-works">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_icon.png" alt="servicios">
        </div>
        <p class="text-center lead">
            <?php 
            if (function_exists('get_field')) {
                echo wp_kses_post(get_field('servicios_texto'));
            } else {
                echo 'Ofrecemos a nuestros Clientes una gran experiencia y Know-How, implementando soluciones singulares y avanzadas, tanto en proyectos de <strong>Automatización, Control y Seguimiento</strong> de la Producción, como en <strong>Gestión de Procesos</strong>, aplicando los más modernos métodos y tecnologías. Esto implica un serio compromiso al asumir los retos y desafíos que puedan presentarse para conseguir juntos los objetivos estratégicos de nuestros Clientes.';
            }
            ?>
        </p>
    </div>
</section>
