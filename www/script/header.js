$('body').on('click', '.icon-menu', function () {
    $('.header-menu__wrapper').toggleClass('header-menu__wrapper_active').toggleClass('header-menu__wrapper_transform');
    $('.mobile-top').toggleClass('mobile-top_active');
    $('.menu-contacts').toggleClass('menu-contacts_active');
    $('.icon-menu').toggleClass('icon-menu_active');
    $('.header-search').removeClass('header-search_active');
});

$('body').on('click', '.menu-list__arrow', function (e) {

    $(this).next().addClass('_active');


});
$('body').on('click', '.arrow_back', function (e) {

    $(this).parent().removeClass('_active');

});
$('body').on('click', '.search-icon', function (e) {
    $('.header-search').toggleClass('header-search_active');
    $('.header-menu__wrapper').removeClass('header-menu__wrapper_active').removeClass('header-menu__wrapper_transform');
    $('.mobile-top').removeClass('mobile-top_active');
    $('.menu-contacts').removeClass('menu-contacts_active');

});


