$(document).ready(function(){
    //Start Carrusel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                nav:true
            }
        }
    });
    //End Carrucel
});