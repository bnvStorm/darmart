$(document).ready(function () {
    $('.slider-bigthumb').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        infinite: false,

        asNavFor: '.slider-thumb'
    });
    $('.slider-thumb').slick({
        dots: false,
        vertical: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        adaptiveHeight: true,
        verticalSwiping: true,
        infinite: false,
        asNavFor: '.slider-bigthumb',
        focusOnSelect: true,
        prevArrow: $('.thumb-container .prev'),
        nextArrow: $('.thumb-container .next'),
        responsive: [
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                    vertical: false,
                    adaptiveHeight: false,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    adaptiveHeight: false,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });
        lightbox.option({
        'wrapAround': true,
        'albumLabel': "Фото %1 из %2"
    })
});
