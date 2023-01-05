
new Swiper('.popular-slider', {

    loop: true,

    navigation: {
        nextEl: '.popular-slider__button-next',
        prevEl: '.popular-slider__button-prev',
    },
    spaceBetween: 25,
    breakpoints: {
        320: {
            slidesPerView: 1.2,
        },
        567: {
            slidesPerView: 1.5,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    },
})




let q = $('.popular-slider__quantity')

for (let i = 0; i < q.length; i++){
    if(q[i].innerText == 0){
        $('.popular-slider__status')[i].innerText = 'Отсутствует'
    }else {
        $('.popular-slider__status')[i].innerText = 'В наличие'
    }
}


