(function ($) {
    "use strict";

    // Inisialisasi carousel
    $('.owl-men-item, .owl-women-item, .owl-kid-item').each(function() {
        $(this).owlCarousel({
            items: 5,
            loop: true,
            dots: true,
            nav: true,
            margin: 30,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    });

    // Mengubah latar belakang header saat scroll
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var box = $('#top').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });

    // Menu responsif untuk mobile
    function mobileNav() {
        var width = $(window).width();
        $('.submenu').on('click', function() {
            if (width < 767) {
                $('.submenu ul').removeClass('active');
                $(this).find('ul').toggleClass('active');
            }
        });
    }

    $(window).on('resize', function() {
        mobileNav();
    });

    // Menu elevator animation
    $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                var width = $(window).width();
                if (width < 991) {
                    $('.menu-trigger').removeClass('active');
                    $('.header-area .nav').slideUp(200);
                }
                $('html,body').animate({
                    scrollTop: (target.offset().top) - 80
                }, 700);
                return false;
            }
        }
    });

    $(document).ready(function() {
        $(document).on("scroll", onScroll);

        // Smooth scroll
        $('.scroll-to-section a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            $(document).off("scroll");

            $('.scroll-to-section a').each(function() {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                scrollTop: ($target.offset().top) - 79
            }, 500, 'swing', function() {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.nav a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.nav ul li a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }

    // Animasi preloader
    $(window).on('load', function() {
        console.log("Window loaded");
        if ($('.cover').length) {
            $('.cover').parallax({
                imageSrc: $('.cover').data('image'),
                zIndex: '1'
            });
        }

        $("#preloader").animate({ 'opacity': '0' }, 200, function() {
            console.log("Preloader animated");
            setTimeout(function() {
                $("#preloader").css("visibility", "hidden").fadeOut();
                console.log("Preloader hidden");
            }, 400);
        });
    });

    mobileNav();

})(window.jQuery);
