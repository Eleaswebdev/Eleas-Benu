$(document).ready(function(){

    function headerFixed() {
        var logoHeight = $('.header_logo').outerHeight();
        var menuHeight = $('.header_menu').outerHeight();
        if ($(window).scrollTop() > logoHeight) {
            $(".header_menu_area").addClass("fixed-top");
            $('.custom_height').css({
                height: `${menuHeight}px`
            })
        } else {
            $(".header_menu_area").removeClass("fixed-top");
            $('.custom_height').css({
                height: 'auto'
            })
        }
    }

    function headerFixedMobile() {
        var menuHeightMobile = $('.header_mobile').outerHeight();
        $(".header_menu_area").addClass("fixed-top");
        $('.custom_height_mobile').css({
            'margin-top' : `${menuHeightMobile}px`
        })
    }

 
    $(window).on('scroll', function () {
        headerFixed();
    });

    function resizeHeader() {
        if (w > 1024) {
            headerFixed();
        } else {
            headerFixedMobile();
        }
    }
    var w = $(window).width();
    resizeHeader();

    $(window).resize(function () {
        headerFixed();
        resizeHeader()
    });

    // MEGA MENU
    $('.header_menu_wrap > ul > li ').hover(function () {
        $(this).addClass('open_megamenu');
    }, function () {
        $(this).removeClass('open_megamenu');
    })


    // OPEN MOBILE MENU

    $(".menu_bar").click(function () {
        $(".mobile_menu").addClass('menu_open');
        return false;
    });

    $('.menu_bar').click(function () {
        $('.mobile_menu').addClass('menu_open');
        $('.mobile_overlay').addClass('mobile_overlay_open');
        $('.ic_c_mb').addClass('ic_c_mb_show');
        return false;
    });
    $('.ic_c_mb').click(function () {
        $('.mobile_menu').removeClass('menu_open');
        $('.mobile_overlay').removeClass('mobile_overlay_open');
        $('.ic_c_mb').removeClass('ic_c_mb_show');
    });
    $('.mobile_overlay').click(function () {
        $('.mobile_menu').removeClass('menu_open');
        $('.mobile_overlay').removeClass('mobile_overlay_open');
        $('.ic_c_mb').removeClass('ic_c_mb_show');
    });

    /*============================================
        TOP HEADER SLIDER
    ==============================================
    */
    $(".left_text_slider").slick({
        // normal options...
        infinite: false,
        slidesToShow: 1,
        dots: false,
        prevArrow: "<button class='arrow_left'><i class='fas fa-caret-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='fas fa-caret-right'></i></button>",
        // the magic
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }

        }]
    });


    /*============================================
        TOP HEADER SLIDER
    ==============================================
    */
    $(".banner_slider").slick({
        // normal options...
        infinite: false,
        slidesToShow: 1,
        dots: false,
        prevArrow: "<button class='arrow_left'><i class='lni lni-chevron-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='lni lni-chevron-right'></i></button>",
        // the magic
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                infinite: true
            }

        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }

        }]
    });


    /*============================================
        BEST SELLER SLIDER
    ==============================================
    */
    $(".best_seller_slider").slick({
        // normal options...
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: false,
        prevArrow: "<button class='arrow_left'><i class='lni lni-chevron-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='lni lni-chevron-right'></i></button>",
        // the magic
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }

        }]
    });


    /*============================================
        BEST SELLER SLIDER
    ==============================================
    */
    $(".instagram_slider").slick({
        // normal options...
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        dots: false,
        prevArrow: "<button class='arrow_left'><i class='lni lni-chevron-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='lni lni-chevron-right'></i></button>",
        // the magic
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }

        }]
    });


    /*============================================
        TOP HEADER SLIDER
    ==============================================
    */
    $(".footer_testimonial_slider").slick({
        // normal options...
        infinite: false,
        slidesToShow: 1,
        dots: true,
        prevArrow: "<button class='arrow_left'><i class='lni lni-chevron-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='lni lni-chevron-right'></i></button>",
        // the magic
        responsive: [{

            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                infinite: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }

        }]
    });


    //PRODUCT PAGE
    $('.filter_toggle').click(function() {
        $('.custom_filter').slideToggle();
    });
    $('.close_icon').click(function () {
        $('.custom_filter').slideUp();
    });
    
    /*
    =========================================================================================
    12. SEARCH OVERLY
    =========================================================================================
    */
    $(".filter-search").click(function () {
        $(".full-page-search").addClass("open-search");
    });
    $(".sr-overlay").click(function () {
        $(".full-page-search").removeClass("open-search");
    });
    $(".close_icon").click(function () {
        $(".full-page-search").removeClass("open-search");
    });
    
    
    /*
    ================================
        SINGLE PRODUCT MOBILE SLIDER
    ================================
    */
    $('.single_img_mobile').slick({
        slidesToScroll: 1,
        slidesToShow: 5,
        rows: 0,
        dots: false,
        prevArrow: "<button class='arrow_left'><i class='lni lni-chevron-left'></i></button>",
        nextArrow: "<button class='arrow_right'><i class='lni lni-chevron-right'></i></button>",
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 1
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 1
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 1
            }
        }]
    });

    //CHECKOUT PAGE
    $('.checkout_inner input ,.checkout_inner select').click(function() {
        $(this).parent().siblings().removeClass('show');
        $(this).parent().addClass('show');
    });


    $('.checkout_inner input').each(function() {
        var dInput = this.value;
        if (dInput) {
            $(this).parent().addClass('hasvalue');
            if ($(this).val() == '') { // check if value changed
                $(this).parent().removeClass('hasvalue');
            }
        } else {
            $(this).parent().removeClass('hasvalue');
        }
    }); 
    $('.checkout_inner input').keyup(function() {
        var dInput = this.value;
        if (dInput) {
            $(this).parent().addClass('hasvalue');
            if ($(this).val() == '') { // check if value changed
                $(this).parent().removeClass('hasvalue');
            }
        } else {
            $(this).parent().removeClass('hasvalue');
        }
    });

    /*============================================
        CART INCREASE DECREASE VALUE
    ==============================================
    */

    $('.add').on('click', function () {
        var $qty = $(this).closest('.num_count').find('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.minus').on('click', function () {
        var $qty = $(this).closest('.num_count').find('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });

});

