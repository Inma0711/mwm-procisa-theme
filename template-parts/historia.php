<section id="servicios">
    <span id="historia"></span>
    <div class="container">
        <h2 class="text-center">HISTORIA</h2>
        <div class="icon-works">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/historia/icon-time.png" alt="historia">
        </div>
        <p class="text-center lead">
            <?php 
            if (function_exists('get_field')) {
                echo wp_kses_post(get_field('historia_texto'));
            } else {
                echo 'La constante evolución de los Sistemas de Control Industrial nos motiva para situarnos siempre en <strong>vanguardia</strong> y así afrontar nuevos retos con las mayores garantías de <strong>éxito</strong>. En sus 44 años de historia, <strong>PROCISA</strong> ha conseguido diversificar su participación en diferentes sectores industriales, siendo pieza clave para la consecución del éxito de numerosos proyectos. Estos son los principales <strong>Hitos en la Historia de la compañía.</strong>';
            }
            ?>
        </p>
    </div>
</section>
