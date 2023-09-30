(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });
    
})(jQuery);



(function () {
    function id(v) {
        return document.getElementById(v);
    }

    function loadbar() {
        let ovrl = id("overlay1"),
            ovrl2 = id("overlay2"),
            olog = id("status"),
            img = document.images,
            c = 0;
        tot = img.length;

        function imgLoaded() {
            c += 1;

            const opac = (((100 / tot) * c) << 0) / 100;
            olog.style.opacity = opac;

            if (c === tot) {
                return doneLoading();
            }
        }

        function doneLoading() {
            ovrl.classList.add("white-overlay");
            ovrl2.classList.add("white-overlay2");
        }

        for (let i = 0; i < tot; i++) {
            const tImg = new Image();
            tImg.onload = imgLoaded;
            tImg.onerror = imgLoaded;
            tImg.src = img[i].src;
        }
    }
    document.addEventListener("DOMContentLoaded", loadbar, false);
})();


new Drift(document.querySelector(".drift-demo-trigger"), {
    paneContainer: document.querySelector(".details"),
    inlinePane: 769,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true,
});