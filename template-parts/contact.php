<?php
/**
 * Sección: Contacto
 * Descripción: Formulario de contacto y datos de la empresa.
 */
?>
<section id="contact">
    <div class="container">
        <h2 class="text-center">
            Contacto
            <i class="icon-contact">
                <img src="img/icon-contact.png" alt="Contacto">
            </i>
        </h2>
        <p class="text-center lead">
            Concertemos una reunión y trabajemos en mejorar su producción y resultados. El momento es ahora.
            <br>
            <strong>Realicémoslo juntos.</strong>
        </p>
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
                <div class="contact-info-block">
                    <strong>Sede en Europa</strong><br>
                    Parque Industrial y de Servicios del Aljarafe.<br>
                    Calle Brújula 62.<br>
                    41927 - Mairena del Aljarafe (Sevilla).<br>
                    España<br>
                    <strong>Tlf.: +34 954 18 66 80</strong>
                </div>
                <div class="contact-info-block">
                    <strong>Sede en América</strong><br>
                    6ª Avd. 0-60 Gran Centro Comercial Zona 4 / Torre II.<br>
                    8º Nivel. Oficina 801.<br>
                    01004 Guatemala C.A. (Guatemala).<br>
                    <strong>Tlf.: +502 2335-2320 / Tlf.: +502 2335-2198</strong>
                </div>
                <div class="contact-info-block">
                    <strong>¿Busca trabajo?</strong><br>
                    trabajengrupoprocisa@procisa.es
                </div>
                <div class="contact-info-block">
                    <strong>Suscríbete a nuestra lista de correo</strong><br>
                    <form class="subscribe-form">
                        <input type="email" placeholder="E-mail">
                        <button type="submit">Subscribirse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>