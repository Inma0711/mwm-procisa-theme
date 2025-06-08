window.addEventListener('scroll', function() {
    var nav = document.querySelector('.main-nav'); // Cambia por tu clase o id real
    if(window.scrollY > 50){
        nav.classList.add('nav-sticky');
    } else {
        nav.classList.remove('nav-sticky');
    }
});

jQuery(document).ready(function($) {
    $("#owl-certificados").owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });
});