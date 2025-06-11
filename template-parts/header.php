<header id="home" class="site-header">
    <div class="language-selector">
        <a href="#en">🇬🇧</a>
        <a href="#es">🇪🇸</a>
    </div>
    <div class="header-content">
        <div style="padding: 2%;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_procisa.png" alt="Trabajador"/>
        </div>
        <div class="slider">
  <div class="slider-phrases">
    <span class="active"><strong>44 años de experiencia</strong> internacional.</span>
    <span>Soluciones de <strong>virtualización</strong> para sistemas de control.</span>
    <span>Mantenimiento y <strong>tele-asistencia</strong> de instalaciones.</span>
    <span>Especialistas en <strong>automatización y control</strong> industrial.</span>
  </div>
</div>

        <!-- Logos y mapa dentro del header -->
        <section class="home-logos" style="position: relative;">
          <div class="row-fluid">
            <div class="span6">
              <h1>
                <img id="mapa" alt="Procisa en el mundo" src="<?php echo get_template_directory_uri(); ?>/assets/images/procisa_mapa.png">
              </h1>
            </div>
            <div class="span2">
              <a href="#">
                <img alt="Siemens / Eaton" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos_01_port.png">
              </a>
            </div>
            <div class="span2">
              <a href="#">
                <img alt="Rockwell / vmware" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos_02_port.png">
              </a>
            </div>
            <div class="span2">
              <a href="#">
                <img alt="Rockwell Power&LVMCC" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos_03_port.png">
              </a>
            </div>
          </div>
          <a id="arrow_down" href="#nuestroTrabajo">NUESTRO TRABAJO</a>
        </section>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const phrases = document.querySelectorAll('.slider-phrases span');
    let current = 0;
    setInterval(() => {
        phrases[current].classList.remove('active');
        current = (current + 1) % phrases.length;
        phrases[current].classList.add('active');
    }, 2000);
});
</script>