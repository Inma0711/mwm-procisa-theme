jQuery(document).ready(function($) {
    $("#owl-certificados").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,          // flechas
        dots: false,        // ❌ puntos abajo
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
