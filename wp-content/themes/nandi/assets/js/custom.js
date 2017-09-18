$ = jQuery;

$(document).ready(function(){

    var goToTopTimer = false;

    var item_length = $('#js-home-masthead-carousel > div').length - 1;

    var slider = $('#js-home-masthead-carousel').slick({
        dots: true,
        autoplay: true,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: false
    });


    // On before slide change
    slider.on('afterChange', function(event, slick, currentSlide, nextSlide){

        if( item_length === slick.slickCurrentSlide() && slick.options.autoplay){
            $('#js-home-masthead-carousel').slick('slickSetOption', 'autoplay', false, true);
            setTimeout(function() {
                $('#js-home-masthead-carousel').slick('slickGoTo', '0');
            }, 4000)
        };
    });


    $('#js-home-trivia-carousel').slick({
        pauseOnFocus: false,
        fade: true,
        speed: 1000
    });


    $("#header-share").jsSocials({
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        //url: window.location.href,
        //text: "Enjoy local foods, drinks, arts, culture, games and sports at Nandi Habba 2017!",
        shares: [
            {
                share: "twitter",
                logo: "fa fa-twitter-square"
            },
            {
                share: "facebook",
                logo: "fa fa-facebook-square"
            },
            {
                share: "linkedin",
                logo: "fa fa-linkedin-square"
            },
            {
                share: "googleplus",
                logo: "fa fa-google-plus-square"
            }
        ],
        on: {
            click: function(e) { hideDropdown(e) }
        }
    });

    $("#itinerary-share").jsSocials({
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        url: "http://www.nandihabba.com/events",
        text: $('.n-quote').text().trim(),
        shares: [
            {
                share: "twitter",
                logo: "fa fa-twitter-square"
            },
            {
                share: "facebook",
                logo: "fa fa-facebook-square"
            },
            {
                share: "linkedin",
                logo: "fa fa-linkedin-square"
            },
            {
                share: "googleplus",
                logo: "fa fa-google-plus-square"
            }
        ],
        on: {
            click: function(e) { hideDropdown(e) }
        }
    });

    function hideDropdown(e) {
        $(e.target).closest('.n-share-dropdown').removeClass('open');
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() > 1000) {
            $('#e-goto-top').addClass("e-show");
        }
        else {
            $('#e-goto-top').removeClass("e-show");
        }

        if($('#e-goto-top').hasClass("e-show")) {
            if(goToTopTimer !== false) clearTimeout(goToTopTimer);

            goToTopTimer =  setTimeout( function() {
                $('#e-goto-top').removeClass("e-show");
            }, 3000);
        }
    });

    $('#e-goto-top').click(function() {
        $('body').velocity("scroll", { duration: 600, easing: 'easeOutQuad' });
    });

    $('.js-ticket-tooltip').tooltip({
        container: 'body',
        html: "true", 
        trigger: "click", 
        placement: "bottom", 
        title: "Tickets will be available three weeks before the event on <br /> <span>www.bookmyshow.com</span>",
        template: '<div class="tooltip n-yellow-tootltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">sadfds</div></div>'
    });

    $('.js-ticket-tooltip-hover').tooltip({
        container: 'body',
        html: "true", 
        trigger: "hover", 
        placement: "bottom", 
        title: "Tickets will be available three weeks before the event on <br /> <span>www.bookmyshow.com</span>",
        template: '<div class="tooltip n-yellow-tootltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">sadfds</div></div>'
    });

    $('body').on('click', function (e) {

        var currentEle =  $(e.target);

        $('.js-ticket-tooltip').each(function() {
            if($(e.target).is($(this))) return;

            $(this).tooltip('hide')
        });
    });


    $('#js-event-scroll a').click(function() {

        //$('#js-event-scroll a').removeClass('n-active');

        //$(this).addClass('n-active');

        var section = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(section).offset().top - 100
        });
    });

    $('#js-show-more-events').click(function() {
        $("#js-event-section").animate({'max-height' : '5000px'},'slow'); 
        $(this).fadeOut();
    });


});
