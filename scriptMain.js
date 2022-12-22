window.onload = function () {

    $(document).on('click', function (e) {


        const targetElement = e.target;
        let targetElementParent = targetElement.parentElement


        if (targetElement.classList.contains('icon-menu')) {
            $('.header-menu__wrapper').toggleClass('_active');
            $('.mobile-top').toggleClass('_active');
            $('.menu-list__item').toggleClass('_active');
            $('.menu-contacts').toggleClass('_active');

        }

        if (targetElement.classList.contains('menu-list__arrow')) {
            let count = 1;

                if (targetElement.parentElement.classList.contains('menu-list__item')){
                    targetElement.nextElementSibling.classList.add('_active')
                    $('.menu-list').attr('style', 'height:' + (40 * targetElement.nextElementSibling.childElementCount+ 80)   + 'px').addClass('_transform320' );
                }
            targetElement.parentElement.classList.add('_active');
            return countClick = count;


        }

        if (targetElement.classList.contains('arrow_back')) {

            if (targetElementParent.parentElement.classList.contains('menu-list__item')) {
                setTimeout(function (){
                    targetElement.parentElement.classList.remove('_active')

                },300)

            }
            $('.menu-list').removeClass('_transform' + countClick * 320).removeAttr('style', 'height');
            countClick--;
        }


    });
}



