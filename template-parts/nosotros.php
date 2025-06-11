<section id="nosotros" class="nosotros-section">
    <span id="nosotros"></span>
    <div class="container">
        <h2 class="text-center">
            <?php 
            $titulo = get_field('nosotros_titulo');
            echo $titulo ? esc_html($titulo) : 'NOSOTROS';
            ?>
        </h2>
        <div class="icon-works">
            <?php 
            $icono = get_field('nosotros_icono');
            if ($icono) {
                echo '<img src="' . esc_url($icono['url']) . '" alt="' . esc_attr($icono['alt']) . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/icon-about.png" alt="nosotros">';
            }
            ?>
        </div>
        <p class="text-center lead">
            <?php 
            $texto = get_field('nosotros_texto');
            echo $texto ? wp_kses_post($texto) : 'Nuestro equipo humano integra e incorpora la experiencia y conocimiento adquiridos durante 44 años por la compañía con las últimas innovaciones. Este conjunto de habilidades nos permite generar soluciones especificas para cada sector.';
            ?>
        </p>
    </div>

    <?php if (function_exists('get_field') && have_rows('nosotros_equipo')) : ?>
        <div class="row">
            <?php 
            $counter = 0;
            while (have_rows('nosotros_equipo')) : the_row();
                $nombre = get_sub_field('nombre');
                $cargo = get_sub_field('cargo');
                $imagen = get_sub_field('imagen');
                
                if ($counter > 0 && $counter % 4 === 0) {
                    echo '</div><div class="row" style="margin-left: 0px;">';
                }
                ?>
                <div class="span3">
                    <div class="person">
                        <?php if ($imagen) : ?>
                            <img alt="<?php echo esc_attr($nombre); ?>" src="<?php echo esc_url($imagen['url']); ?>">
                        <?php endif; ?>
                        <div class="nombre-nosotros">
                            <h3><?php echo esc_html($nombre); ?></h3>
                            <p><a href="#"><?php echo esc_html($cargo); ?></a></p>
                        </div>
                    </div>
                </div>
                <?php
                $counter++;
            endwhile;
            ?>
        </div>
    <?php else : ?>
        <div class="row">
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Fernando S.jpg">
                    <div class="nombre-nosotros">
                        <h3>Fernando Sánchez-Rodilla</h3>
                        <p><a href="#">Director de Aplicaciones</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Martin Jr2.jpg">
                    <div class="nombre-nosotros">
                        <h3>Martín Talaverón Bellerín</h3>
                        <p><a href="#">Consejero Delegado</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Martin Sr.jpg">
                    <div class="nombre-nosotros">
                        <h3>Martín Talaverón Román</h3>
                        <p><a href="#">Presidente</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Antonio Cap.jpg">
                    <div class="nombre-nosotros">
                        <h3>Antonio Capitán</h3>
                        <p><a href="#">Director de Ingeniería</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-left: 0px;">
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Antonio Carr.png">
                    <div class="nombre-nosotros">
                        <h3>Antonio Carranza</h3>
                        <p><a href="#">Director T.I.C.</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Carlos Serrano.png">
                    <div class="nombre-nosotros">
                        <h3>Carlos Serrano</h3>
                        <p><a href="#">Director Procisa Centro América</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Adoracion B.jpg">
                    <div class="nombre-nosotros">
                        <h3>Adoración Borges</h3>
                        <p><a href="#">Directora de Recursos Humanos</a></p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="person">
                    <img alt="NAME" src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Carlos M2.jpg">
                    <div class="nombre-nosotros">
                        <h3>Carlos Muñoz</h3>
                        <p><a href="#">Director de Calidad y Organización</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
