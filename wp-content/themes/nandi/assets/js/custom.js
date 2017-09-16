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


    $("#header-share").jsSocials({
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        url: "http://www.nandihabba.com",
        text: "Text to share",
        shares: ["twitter", "facebook", "googleplus"],
        on: {
            click: function(e) { hideDropdown(e) }
        }
    });

    $("#itinerary-share").jsSocials({
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        url: "http://www.nandihabba.com",
        text: "Text to share",
        shares: ["twitter", "facebook", "googleplus"],
        on: {
            click: function(e) { hideDropdown(e) }
        }
    });

    function hideDropdown(e) {
        $(e.target).closest('.n-share-dropdown').removeClass('open');
    }
});
