
(function ($) {
    "use strict";

    document.addEventListener('DOMContentLoaded', () => {
        setInterval(() => {
            const searchInput = $('#autocomplete-0-input').attr("placeholder", "Search for products,brand and more");
            const placeholders = ["Search", "Find Products", "Search Brands", "Search Style"];
            let currentIndex = 0;
            let placeholderIndex = 0;
            let forward = true;
            const typingSpeed = 100;
            const erasingSpeed = 50;
            const newPlaceholderDelay = 2000;

            function typePlaceholder() {
                const currentPlaceholder = placeholders[currentIndex];

                if (forward) {
                    placeholderIndex++;
                    if (placeholderIndex === currentPlaceholder.length) {
                        forward = false;
                        setTimeout(typePlaceholder, newPlaceholderDelay);
                        return;
                    }
                } else {
                    placeholderIndex--;
                    if (placeholderIndex === 0) {
                        forward = true;
                        currentIndex = (currentIndex + 1) % placeholders.length;
                    }
                }

                searchInput.placeholder = currentPlaceholder.substring(0, placeholderIndex);
                // alert(placeholderIndex);
                setTimeout(typePlaceholder, forward ? typingSpeed : erasingSpeed);
            }

            typePlaceholder();
        }, 50);
    });
    // _____________________________________
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('searchSuggestions');
        const overlay = document.getElementById('searchoverlay');

        searchInput.addEventListener('click', function () {
            searchSuggestions.classList.add('show');
            overlay.style.display = 'block';
        });

        document.addEventListener('click', function (event) {
            if (!searchInput.contains(event.target) && !searchSuggestions.contains(event.target)) {
                searchSuggestions.classList.remove('show');
                overlay.style.display = 'none';
            }
        });

        overlay.addEventListener('click', function () {
            searchSuggestions.classList.remove('show');
            overlay.style.display = 'none';
        });
    });
    // ((((((((((((((((((((()))))))))))))))))))))
    // 02. Search Js
    $(".search-toggle").on("click", function () {
        $(".header__search").addClass("search-opened");
        $(".body-overlay").addClass("opened");
    });
    $(".header__search-btn-close").on("click", function () {
        $(".header__search").removeClass("search-opened");
        $(".body-overlay").removeClass("opened");
    });
    $(".body-overlay").on("click", function () {
        $(".header__search").removeClass("search-opened");
        $(".body-overlay").removeClass("opened");
    });
    ////////////////////////////////////////////////////
    // 03. Info Bar Js
    $(".mobile-menu-toggle").on("click", function () {
        $(".extra__info").addClass("info-opened");
        $(".body-overlay").addClass("opened");
        $("body").addClass("scrollDisable");
    });
    $(".extra__info-close-btn").on("click", function () {
        $(".extra__info").removeClass("info-opened");
        $(".body-overlay").removeClass("opened");
        $("body").removeClass("scrollDisable");
    });
    $(".body-overlay").on("click", function () {
        $(".extra__info").removeClass("info-opened");
        $(".body-overlay").removeClass("opened");
        $("body").removeClass("scrollDisable");
    });

    //    ((((((((((((((((((((((((((((((((()))))))))))))))))))))))))))))))))

    // 04. Sticky Header Js
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $("#header-sticky").removeClass("sticky");
            $("#header__transparent").removeClass("transparent-sticky");
        } else {
            $("#header-sticky").addClass("sticky");
            $("#header__transparent").addClass("transparent-sticky");
        }
        // $("#header-sticky").addClass("sticky");
        // $("#header__transparent").addClass("transparent-sticky");
    });

    ////////////////////////////////////////////////////
    // 05. Data-Background Js
    $("[data-background").each(function () {
        $(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
    });
    // 06. Mobile Menu Js
    $('#mobile-menu-active').metisMenu();

    $('#mobile-menu-active .has-dropdown > a').on('click', function (e) {
        e.preventDefault();
    });

    // (((((((((((((((((((((())))))))))))))))))))))
    $('#topSlider').owlCarousel({
        animateOut: 'fadeOut',
        loop: true,
        // margin: 0,
        smartSpeed: 450,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        items: 1,
        responsive: {
            0: {
                dots: true,
            },
            400: {
                dots: true,
            },
            576: {
                dots: true,
            },
            767: {
                dots: true,
            },
            992: {
                dots: true,
            }
        }
    })
    // ______offer slider__
    $('#offer_owl').owlCarousel({
        animateOut: 'fadeOut',
        loop: false,
        margin: 30,
        smartSpeed: 500,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false,
        nav: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1.5
            },
            576: {
                items: 1.5
            },
            767: {
                items: 1.5
            },
            992: {
                items: 1.5
            },
            1200: {
                items: 2
            },
            1600: {
                items: 2
            }
        }
    })
    // ______sellar___slider____
    // ______offer slider__
    $('#sellerBanner_owl').owlCarousel({
        loop: true,
        margin: 0,
        smartSpeed: 1000,
        autoplay: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false,
        nav: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    })
    // ____category slider_____
    $('#category_slider').owlCarousel({
        loop: true,
        margin: 10,
        smartSpeed: 500,
        autoplay: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false,
        nav: false,
        item: 5.5,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 3.5
            },
            400: {
                items: 4.5
            },
            576: {
                items: 5.5
            },
            767: {
                items: 7.5
            },
            992: {
                items: 7.5
            }
        }
    })

    ////////////////////////////////////////////////////
    // 10. Product Slider Js
    $('.product__slider ').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fa fa-angle-left"></i>PREV</button>', '<button>NEXT<i class="fa fa-angle-right"></i></button>'],
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
            1600: {
                items: 4
            }
        }
    });



    ////////////////////////////////////////////////////
    // 11. Product Slider 2 Js ( home page 2 ) 
    $('.product__slider-2 ').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        nav: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1600: {
                items: 3
            }
        }
    });
    // _____
    $('.comboProductsMobile ').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        nav: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        // dots: true,
        responsive: {
            0: {
                items: 1,
                dots: true,

            },
            576: {
                items: 1,
                dots: true,
            },
            767: {
                items: 1,
                dots: false,
            },
            992: {
                items: 1,
                dots: false,
            },
            1200: {
                items: 1,
                dots: false,
            },
            1600: {
                items: 1,
                dots: false,
            }
        }
    });
    $('#combo_slider ').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 4
            },
            1600: {
                items: 4
            }
        }
    });
    // ____________________

    // (((((((((((((((())))))))))))))))
    document.addEventListener('DOMContentLoaded', function () {
        const thumbnails = document.querySelectorAll('.thumb');
        const mainImage = document.getElementById('mainImage');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function () {
                mainImage.src = this.src;
            });
        });
    });

    ////////////////////////////////////////////////////
    // 12. Product Slider 3 Js ( home page 2 ) 
    $('.product__slider-3').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fa fa-angle-left"></i>PREV</button>', '<button>NEXT<i class="fa fa-angle-right"></i></button>'],
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1600: {
                items: 2
            }
        }
    });


    ////////////////////////////////////////////////////
    // 13. Product Slider 4 Js ( home page 4 ) 
    $('.product__slider-4').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fa fa-angle-left"></i>PREV</button>', '<button>NEXT<i class="fa fa-angle-right"></i></button>'],
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
            1600: {
                items: 5
            }
        }
    });


    ////////////////////////////////////////////////////
    // 14. Sale Slider Js 
    $('.sale__area-slider ').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fa fa-angle-left"></i>PREV</button>', '<button>NEXT<i class="fa fa-angle-right"></i></button>'],
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            576: {
                items: 2,
                nav: false,
            },
            767: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });


    ////////////////////////////////////////////////////
    // 15. Sale Slider 2 Js  ( home page 2 ) 
    $('.sale__area-slider-2 ').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<i class="fa-solid fa-angle-left"></i></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1.5,
                nav: false,
                margin: 10,
            },
            400: {
                items: 2,
                nav: false,
                margin: 10,
            },
            576: {
                items: 2,
                nav: false,
            },
            767: {
                items: 3,
                nav: false,
            },
            992: {
                items: 4,
                nav: false,
            },
            1200: {
                items: 5,

            },
            1600: {
                items: 5
            }
        }
    });



    ////////////////////////////////////////////////////
    // 17. Blog Slider Js

    // ___________________________
    $('.welcome__slider').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        items: 6,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin: 20,
                items: 1.5,
                nav: false,
                autoplay: true,
            },
            400: {
                margin: 20,
                items: 2,
                nav: false,
                autoplay: true,
            },
            576: {
                margin: 20,
                items: 2,
                nav: false,
                autoplay: true,
            },
            767: {
                margin: 20,
                items: 3,
                nav: true,
                autoplay: true,
            },
            992: {
                items: 3.5
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });
    // ___combo_slider___
    $('.combos__slider').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 6,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1.5,
                nav: false,
            },
            576: {
                items: 2,
                nav: false,
            },
            767: {
                items: 3,
                nav: false,
            },
            992: {
                items: 4,
                nav: false,
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });
    // ____pre order___
    $('.pre_order_slider').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 6,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin: 10,
                items: 1.5,
                nav: false,
            },
            400: {
                margin: 10,
                items: 2,
                nav: false,
            },
            576: {
                margin: 10,
                items: 2,
                nav: false,
            },
            767: {
                margin: 10,
                items: 3,
                nav: false,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 5,
            },
            1600: {
                items: 5,
            }
        }
    });
    // ____our product slider___
    $('.productslider').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        items: 4,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
            },
            576: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 2
            },
            1200: {
                items: 4
            },
            1600: {
                items: 4
            }
        }
    });
    // ______
    $('.bagProduct__slider').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 5,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin: 10,
                items: 1.5,
                nav: false,
            },
            400: {
                margin: 10,
                items: 2,
                nav: false,
            },
            767: {
                margin: 10,
                items: 3,
                nav: false,
            },
            992: {
                items: 3,
                nav: false,
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });

    // _____________________
    $('.catelog__slider').owlCarousel({
        loop: false,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        items: 5,
        navText: ['<i class="fa-solid fa-angle-left"></i></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin: 10,
                items: 1.5,
                nav: false,
            },
            400: {
                margin: 10,
                items: 2,
                nav: false,
            },
            767: {
                margin: 10,
                items: 3,
                nav: false,
            },
            992: {
                margin: 10,
                items: 3,
                nav: false,
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });
    // _______client____
    $('.client__slider').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        items: 5,
        navText: ['<i class="fa-solid fa-angle-left"></i></i>', '<i class="fa-solid fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin: 20,
                items: 2,
                nav: false,
            },
            767: {
                margin: 20,
                items: 2,
                nav: false,
            },
            992: {
                items: 3
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });
    ////////////////////////////////////////////////////
    // 18. Product Offer SLider Js ( home 2 )
    $('.product__offer-slider').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fal fa-angle-left"></i></button>', '<button><i class="fal fa-angle-right"></i></button>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    });


    ////////////////////////////////////////////////////
    // 19. Masonary Js
    $('.grid').imagesLoaded(function () {
        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });


        // filter items on button click
        $('.masonary-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });

        //for menu active class
        $('.masonary-menu button').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

    });


    ////////////////////////////////////////////////////
    // 20. WoW Js
    new WOW().init();

    ////////////////////////////////////////////////////
    // 21. Cart Plus Minus Js
    $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    ////////////////////////////////////////////////////
    // 22. Range Slider Js
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });

    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));


    ////////////////////////////////////////////////////
    // 23. Show Login Toggle Js
    $('#showlogin').on('click', function () {
        $('#checkout-login').slideToggle(900);
    });

    ////////////////////////////////////////////////////
    // 24. Show Coupon Toggle Js
    $('#showcoupon').on('click', function () {
        $('#checkout_coupon').slideToggle(900);
    });

    ////////////////////////////////////////////////////
    // 25. Create An Account Toggle Js
    $('#cbox').on('click', function () {
        $('#cbox_info').slideToggle(900);
    });

    ////////////////////////////////////////////////////
    // 26. Shipping Box Toggle Js
    $('#ship-box').on('click', function () {
        $('#ship-box-info').slideToggle(1000);
    });

    ////////////////////////////////////////////////////
    // 27. product__slider-active Js ( home 7 )
    $('.product__slider-active').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fal fa-angle-left"></i></button>', '<button><i class="fal fa-angle-right"></i></button>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
            1600: {
                items: 4
            }
        }
    });

    ////////////////////////////////////////////////////
    // 28. testimonial__slider-active Js ( home 7 )
    $('.testimonial__slider-active').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fal fa-angle-left"></i></button>', '<button><i class="fal fa-angle-right"></i></button>'],
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    });

    ////////////////////////////////////////////////////
    // 28. blog__slider-active Js ( home 7 )
    $('.blog__slider-active').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fal fa-angle-left"></i></button>', '<button><i class="fal fa-angle-right"></i></button>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1600: {
                items: 2
            }
        }
    });

    ////////////////////////////////////////////////////
    // 28. brand__slider-active Js ( home 7 )
    $('.brand__slider-active').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        items: 6,
        navText: ['<button><i class="fal fa-angle-left"></i></button>', '<button><i class="fal fa-angle-right"></i></button>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            },
            1600: {
                items: 5
            }
        }
    });

    $(document).ready(function () {
        $('.owl-prev').addClass('disabled');

        owl.on('changed.owl.carousel', function (event) {
            var currentIndex = event.item.index;
            var itemCount = event.item.count;

            if (currentIndex === itemCount - event.page.size) {
                $('.owl-next').addClass('disabled');
            } else {
                $('.owl-next').removeClass('disabled');
            }

            if (currentIndex === 0) {
                $('.owl-prev').addClass('disabled');
            } else {
                $('.owl-prev').removeClass('disabled');
            }
        });

        $('.owl-next').click(function () {
            $('.owl-prev').removeClass('disabled');
        });

        $('.owl-prev').click(function () {
            var currentIndex = owl.find('.owl-item.active').index();
            if (currentIndex === 1) {
                $(this).addClass('disabled');
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.image-placeholder');

        images.forEach(image => {
            const img = new Image();
            img.src = image.src;

            img.onload = function () {
                image.classList.add('loaded');
            };

            img.onerror = function () {
                console.error(`Image failed to load: ${image.src}`);
            };
        });
    });
    // _____disable______rightclick______and__zoom_in___And__zoom__out____
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    }, false);

    document.addEventListener('wheel', function (e) {
        if (e.ctrlKey) {
            e.preventDefault();
        }
    }, { passive: false });

    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey && (e.key === '+' || e.key === '-' || e.key === '=')) ||
            (e.ctrlKey && e.key === '0')) {
            e.preventDefault();
        }
    });

    // ________________________
    document.addEventListener("DOMContentLoaded", function () {
        const feedbackButton = document.getElementById('feedback-btn');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 600) {
                feedbackButton.style.display = 'block';
            } else {
                feedbackButton.style.display = 'none';
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            // document.getElementById('notification-popup').style.display = 'block'; 
        }, 6000);

        document.getElementById('close-popup').addEventListener('click', function () {
            document.getElementById('notification-popup').style.display = 'none';
            setTimeout(() => {
                $('#offer_modal').modal('show');
            }, 8000);
        });

        // Variable to check if the user has scrolled to the fourth component
        let scrollTriggered = false;

        // Add event listeners for manually closing second popup
        document.getElementById('close-offer-modal').addEventListener('click', function () {
            $('#offer_modal').modal('hide');
        });

        document.getElementById('collect-all').addEventListener('click', function () {
            $('#offer_modal').modal('hide');
        });

        // Close second popup and set timer for third popup
        $('#offer_modal').on('hidden.bs.modal', function () {
            // Show third popup after 12-15 seconds
            setTimeout(() => {
                if (scrollTriggered) {
                    showPopup();
                } else {
                    window.addEventListener('scroll', checkScroll);
                }
            }, 4000);
        });

        // Close third popup
        function closePopup() {
            var popup = document.getElementById('popupContainer');
            popup.style.display = 'none';
        }

        // Show third popup
        function showPopup() {
            var popup = document.getElementById('popupContainer');
            popup.style.display = 'block';

            setTimeout(function () {
                closePopup();
            }, 6000);

            document.getElementById('close-third-popup').addEventListener('click', function () {
                closePopup();
            });
        }

        function checkScroll() {
            const rect = document.getElementById('view_Third_popup').getBoundingClientRect();
            const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
            if (!scrollTriggered && !(rect.bottom < 0 || rect.top - viewHeight >= 0)) {
                scrollTriggered = true;
                window.removeEventListener('scroll', checkScroll);
                // Only show the third popup if the second one has already been shown
                if (sessionStorage.getItem('modalShown') !== null) {
                    showPopup();
                }
            }
        }

        window.addEventListener('scroll', checkScroll);
    });
})(jQuery);