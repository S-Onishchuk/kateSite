$(function () {

    let header = $("#header");
    let intro = $("#intro");
    let introH = intro.innerHeight();
    let cakePage = $("#cakepage");
    let cakePageH = cakePage.innerHeight();
    let scrollPos = $(window).scrollTop();

    checkScroll(scrollPos, introH);

    // Fixed header
    $(window).on("scroll resize", function () {
        introH = intro.innerHeight();
        cakePageH = cakePage.innerHeight();
        scrollPos = $(this).scrollTop();

        menu.removeClass("nav--active");
        menuBtn.removeClass("active");

        checkScroll(scrollPos, introH, cakePageH);
    });

    function checkScroll(scrollPos, introH, cakePageH) {
        if (scrollPos > introH || scrollPos > cakePageH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    }

    // menu scroll
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();

        let elementId = $(this).data("scroll");
        let elementOffset = $(elementId).offset().top;

        $("html, body").animate({
            scrollTop: elementOffset - 60
        });
    });

    // toggle
    let menuBtn = $(".nav-toggle");
    let menu = $(".nav");

    menuBtn.on('click', function (event) {
        event.preventDefault();

        menu.toggleClass("nav--active");
        menuBtn.toggleClass("active");
    });


    //lightbox foto
    lightbox.option({
        'showImageNumberLabel': false,
        'wrapAround': true
    });

    //slick slider
    $("#slick_intro").slick({
        arrows: false,
        dots: true,
        infinite: true,
        fade: true, //затемнення
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnHover: true
    });

    $("#slick_review").slick({
        arrows: true,
        infinite: true,
        fade: true, //затемнення
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,

        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false
                }
            }
        ]

    });

    // call
    let callBtn = $(".call");
    let callItem = $(".call__item");

    callBtn.on('click', function (event) {
        event.preventDefault();

        callBtn.toggleClass("call--close")
        callItem.toggleClass("call__item--active");
    });


});