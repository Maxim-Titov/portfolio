$(document).ready(function() {
    const slickSettings = {
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 10000,
        arrows: false,
        fade: true,
        mobileFirst: true,
    };

    $('.slider').slick({
        ...slickSettings,
    });
});