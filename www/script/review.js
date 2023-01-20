new Swiper('.review-slider', {

    loop: true,

    navigation: {
        nextEl: ".review-slider__button-next",
        prevEl: ".review-slider__button-prev",
    },
    spaceBetween: 25,
    breakpoints: {
        320: {
            slidesPerView: 1.2,
        },
        567: {
            slidesPerView: 1.4,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    },
})


$('.review-slider__text').each(function () {
    if ($(this).height() > 167) {
        $(this).addClass('review-slider__text_short')
        $(this).after('<button class="review-slider__button-all">Показать полностью</button>')
    }
})

$('.review-slider__button-all').click(function () {
        $(this).parent().find('.review-slider__text').toggleClass('review-slider__text_active')
    }
);
