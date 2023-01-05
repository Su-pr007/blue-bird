const offer = $('.offers-grid__item');
let width = $(document).width();

if (width < 576) {
    if (offer.length > 3) {
        for (let i = 4; i <= offer.length; i++) {
            $('.offers-grid__item:nth-child(' + i + ')').addClass('offers-grid__item_hidden');
        }
    }

};

