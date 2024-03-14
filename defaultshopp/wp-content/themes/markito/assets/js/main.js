/*--------------------------------------------------
Project:        Econte
Version:        1.0
Author:         Company Name
-----------------------------------------------------

    JS INDEX
    ================================================
    * preloader js
    * One Page Scroll
    * slick Menu js 
    * slick Nav
    * Isotope
    * Counter
    * bottom to top
    ================================================*/

(function($) {
    "use strict";
    var $main_window = $(window);
    /*====================================
        preloader js
      ======================================*/
    $main_window.on('load', function() {
        $('#preloader').fadeOut('slow');
    });

    /*====================================
                  One Page Scroll
      ======================================*/

    // Select all »a« elements with a parent class »links« and add a function that is executed on click
    $('.navbar-nav .nav-item a').on('click', function(e) {
        // Define variable of the clicked »a« element (»this«) and get its href value.
        var href = $(this).attr('href');
        // Run a scroll animation to the position of the element which has the same id like the href value.
        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, '300');
        // Prevent the browser from showing the attribute name of the clicked link in the address bar
        e.preventDefault();
    });


    /*====================================
                slick slider
    ======================================*/


    $('.home-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        arrows: true,
        cssEase: 'linear',
        responsive: [{

            breakpoint: 786,
            settings: {
                arrows: false,
                dots: false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            },
            breakpoint: 600,
            settings: {
                arrows: false,
                dots: false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            },
        }]
    });

    $('.autoplay').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
    });
    /*====================================
                  slick slider
      =====================================*/
    $('.product-slider').slick({
        slidesToShow: 4,
        arrow: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.one-time').slick({
        dots: true,
        infinite: true,
        arrow: false,
        speed: 300,
        autoplay: false,
        autoplaySpeed: 1400,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        fade: true,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });

    /*====================================
        slick nav
    ======================================*/
    var logo_path = jQuery('.mobile-menu').data('logo');
    var logo_link = jQuery('.mobile-menu').data('link');
    var logo_type = jQuery('.mobile-menu').data('type');
    let logo;

    if (logo_type === 'text') {
        logo = '<a href="' + logo_link + '"></a>';
    } else {
        logo = '<a href="' + logo_link + '"><img src="' + logo_path + '" class="img-fluid" alt="logo"></a>';;
    }

    jQuery('.navbar-nav').slicknav({
        appendTo: '.mobile-menu',
        removeClasses: true,
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"><i/>',
        openedSymbol: '<i class="fa fa-angle-down"><i/>',
        brand: logo
    });


    function markito_toggle_icon_burger() {

        const list = document.querySelectorAll(".slicknav_nav li a");

        // get first element to be focused inside modal
        const firstFocusableElement = document.getElementById('slicknav_btnn');

        const logo = document.querySelector('.nav-brand a');

        const firstFocusableElementclass = document.querySelector('.slicknav_collapsed');

        // get last element to be focused inside modal
        const last = list[list.length - 1];
        const lastFocusableElement = last;

        document.addEventListener('keydown', function(e) {
            let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

            if (!isTabPressed) {
                return;
            }

            if (event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElement) {

                lastFocusableElement.focus();
                e.preventDefault();
            }
            if (event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElementclass) {

                logo.focus();
                e.preventDefault();
            }

            // if shift key pressed for shift + tab combination
            if (e.shiftKey) {
                if (document.activeElement === firstFocusableElement) {
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
            } else {
                if (document.activeElement === lastFocusableElement) {
                    firstFocusableElement.focus();
                    e.preventDefault();
                }
            }
        });
    }


    markito_toggle_icon_burger();

    /*------------ Wow-js -------------*/

    new WOW().init();

    /*====================================
              bottom to top
          ======================================*/

    var btn = $('#btn-to-top');
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });


    $(document).ready(function() {
        var count = 0;
        $("a.add-to-cart").click(function(event) {
            count++;
            $("a.add-to-cart").addClass("size");
            setTimeout(function() {
                $("a.add-to-cart").addClass("hover");
            }, 200);
            setTimeout(function() {
                $("a.cart > span").addClass("counter");
                $("a.cart > span.counter").text(count);
            }, 400);
            setTimeout(function() {
                $("a.add-to-cart").removeClass("hover");
                $("a.add-to-cart").removeClass("size");
            }, 600);
            event.preventDefault();
        });
    });

    document.addEventListener("touchstart", function() {}, true);










})(jQuery);