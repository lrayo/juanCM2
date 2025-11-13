
/* Despliegue de toggle para mostrar menu items*/
$(document).ready(function() {

    $nav=$('.nav');
    $toggleCollapse= $('.toggle-collapse');

    /*Click event on toggle menu*/
    $toggleCollapse.click(function() {
        $nav.toggleClass('collapse');
    });


    // owl-crousel for blog
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        /* dots: false,
        nav: true, */
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        // responsive: responsive
        margin: 0,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
    });

});

