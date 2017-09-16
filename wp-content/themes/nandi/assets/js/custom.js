$ = jQuery;

$(document).ready(function(){
    $('#js-home-masthead-carousel').slick({
        dots: true,
        autoplay: true,
        pauseOnFocus: false,
        autoplaySpeed: 4000
    });

    $('#js-home-trivia-carousel').slick({
        pauseOnFocus: false,
        fade: true,
        speed: 1000
    });
});
