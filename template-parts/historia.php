<section id="historia" class="historia-section">
    <span id="historia"></span>
    <div class="container">
        <h2 class="text-center">
            <?php 
            $titulo = get_field('historia_titulo');
            echo $titulo ? esc_html($titulo) : 'HISTORIA';
            ?>
        </h2>
        <div class="icon-works">
            <?php 
            $icono = get_field('historia_icono');
            if ($icono) {
                echo '<img src="' . esc_url($icono['url']) . '" alt="' . esc_attr($icono['alt']) . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/historia/icon-time.png" alt="historia">';
            }
            ?>
        </div>
        <p class="text-center lead">
            <?php 
            $texto = get_field('historia_texto');
            echo $texto ? wp_kses_post($texto) : 'La constante evolución de los Sistemas de Control Industrial nos motiva para situarnos siempre en <strong>vanguardia</strong> y así afrontar nuevos retos con las mayores garantías de <strong>éxito</strong>. En sus 44 años de historia, <strong>PROCISA</strong> ha conseguido diversificar su participación en diferentes sectores industriales, siendo pieza clave para la consecución del éxito de numerosos proyectos. Estos son los principales <strong>Hitos en la Historia de la compañía.</strong>';
            ?>
        </p>
    </div>
</section>
