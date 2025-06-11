<?php
/**
 * Sección: contactoo
 * Descripción: Formulario de contactoo y datos de la empresa.
 */
?>


<section id="contacto" class="contacto-section">
    <span id="contacto"></span>
    <div class="container">
        <h2 class="text-center">
            <?php 
            $titulo = get_field('contacto_titulo');
            echo $titulo ? esc_html($titulo) : 'CONTACTO';
            ?>
        </h2>
        <div class="icon-works-contacto">
            <?php 
            $icono = get_field('contacto_icono');
            if ($icono && is_array($icono)) {
                echo '<img src="' . esc_url($icono['url']) . '" alt="' . esc_attr($icono['alt']) . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/icon-contact.png" alt="contacto">';
            }
            ?>
        </div>
        <p class="text-center lead">
            <?php 
            $texto = get_field('contacto_texto');
            echo $texto ? wp_kses_post($texto) : 'Concertemos una reunión y trabajemos en mejorar su producción y resultados. El momento es ahora. <strong>Realicémoslo juntos.</strong>';
            ?>
        </p>
    </div>

          <div class="row">
            <div class="span5">
                <form name="htmlform" method="post" action="/cgi-bin/formmail.pl" onsubmit="alert('Su consulta ha sido enviada. ¡Gracias!')">
                    <input type="text" name="name" placeholder="Su nombre" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <textarea name="query" placeholder="Escriba su mensaje" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="span6 offset1">
                <div class="contacto-info-block">
                    <h3 class="contacto-titulo">Sede en Europa</h3>
                    Parque Industrial y de Servicios del Aljarafe.<br>
                    Calle Brújula 62.<br>
                    41927 - Mairena del Aljarafe (Sevilla).<br>
                    España<br>
                    <strong>Tlf.: +34 954 18 66 80</strong>
                </div>
                <div class="contacto-info-block">
                    <h3 class="contacto-titulo">Sede en América</h3>
                    6ª Avd. 0-60 Gran Centro Comercial Zona 4 / Torre II.<br>
                    8º Nivel. Oficina 801.<br>
                    01004 Guatemala C.A. (Guatemala).<br>
                    <strong>Tlf.: +502 2335-2320 / Tlf.: +502 2335-2198</strong>
                </div>
                <div class="contacto-info-block">
                    <h3 class="contacto-titulo">¿Busca trabajo?</h3>
                    trabajengrupoprocisa@procisa.es
                </div>
                <div class="contacto-info-block">
                    <h3 class="contacto-titulo">Suscríbete a nuestra lista de correo</h3>
                    <form class="subscribe-form">
                        <input type="email" placeholder="E-mail">
                        <button type="submit">Subscribirse</button>
                    </form>
                </div>
            </div>
        </div>
</section>
