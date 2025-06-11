<section id="servicios"> <!-- Ha la seccion sectores lleva los estilos de servicios para no repetir codigo -->
    <span id="sectores"></span>
    <div class="container">
        <h2 class="text-center">SECTORES</h2>
        <div class="icon-works">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service_icon.png" alt="servicios">
        </div>
        <p class="text-center lead">
            <?php 
            if (function_exists('get_field')) {
                echo wp_kses_post(get_field('sectores_texto'));
            } else {
                echo 'Desde 1980, hemos sido capaces de diversificar nuestra labor, aplicando tecnologías verificadas y contrastadas en diferentes sectores industriales. Nos avalan entre otras certificaciones las específicas de líderes a nivel mundial en automatización como son <strong>SIEMENS y ROCKWELL AUTOMATION.</strong>';
            }
            ?>
        </p>
    </div>

    <div id="sectores_items">
        <div class="sector-row">
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_aguas_c.png" alt="Aguas">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_azucar_c.png" alt="Azúcar">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_biodiesel_c.png" alt="Biodiésel">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_energia_c.png" alt="Energía">
            </div>
        </div>
        <div class="sector-row">
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_deterg_c.png" alt="Detergentes">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_metal_c.png" alt="Siderurgia">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_cemento_c.png" alt="Cemento - Yeso">
            </div>
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_varios_c.png" alt="Varios">
            </div>
        </div>
        <div class="sector-row center-single-item">
            <div class="sector-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconossectores/ico_aceite_c.png" alt="Aceite">
            </div>
        </div>
    </div>
</section>
