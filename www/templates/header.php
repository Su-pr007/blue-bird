<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style/main.css">
    <script type="text/javascript" rel="stylesheet" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>


</head>
<body>
<header class="header">

    <div class="header__wrapper">
        <div class="header-top">
            <div class="container1">
                <div class="header-top__wrapper">

                    <button class="search-icon">
                        <img src="icon/header/zoom-in.png" alt="">
                    </button>

                    <div class="logo">
                        <img src="icon/header/header-logo.png" alt="" class="logo__icon">
                    </div>

                    <div class="call ">
                        <div class="call__phone ">
                            <div class="call__label">Бесплатно по РФ</div>
                            <div class="call__number">8 800 555-35-35</div>

                        </div>

                        <a data-fancybox href="#modal-window" class="call__button">
                            Заказать звонок
                        </a>

                    </div>

                    <div class="contacts ">
                        <div class="contacts__label">Наши новости:</div>
                        <div class="contacts__social">
                            <img src="icon/header/fb.png" alt="" class="contacts__item">
                            <img src="icon/header/vk.png" alt="" class="contacts__item">
                            <img src="icon/header/inst.png" alt="" class="contacts__item">
                        </div>
                    </div>
                    <div class="country ">
                        <div class="country__item">
                            <div class="country__label">RU</div>
                            <img src="icon/header/rf.png" alt="" class="country__icon">
                        </div>
                        <div class="country__item ">
                            <div class="country__label">EN</div>
                            <img src="icon/header/uk.png" alt="" class="country__icon">
                        </div>
                    </div>
                    <button class="icon-menu ">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="header-search">
                    <input class="header-search__input" type="text" placeholder="А вот тут поиск!">
                    <div class="header-search__icon">
                        <img src="icon/header/menu_search.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="header-menu">
            <div class="container1">
                <div class="header-menu__wrapper ">
                    <div class="mobile-top">
                        <div class="mobile-call ">
                            <div class="mobile-call__phone">
                                <div class="mobile-call__label">Бесплатно по РФ</div>
                                <div class="mobile-call__number">8 555-35-35</div>
                            </div>
                            <a class="mobile-call__button" data-fancybox href="#modal-window">
                                Заказать звонок
                            </a>

                        </div>

                        <div class="mobile-country ">
                            <div class="mobile-country__item">
                                <div class="mobile-country__label">RU</div>
                                <img src="icon/header/rf.png" alt="" class="mobile-country__icon">
                            </div>
                            <div class="mobile-country__item ">
                                <div class="mobile-country__label">EN</div>
                                <img src="icon/header/uk.png" alt="" class="mobile-country__icon">
                            </div>
                        </div>
                    </div>

                    <ul class="menu-list menu-list_header">
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Виды птиц</a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">Виды птиц 1</a>

                                </li>
                                <li class="sublist__item">
                                    <a href="">Виды птиц 2</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Виды птиц 3</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Виды птиц 4</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Виды птиц 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Популярное </a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">Популярное</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Популярное 2</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Популярное 3</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Популярное 4</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Популярное 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Заказы </a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">Заказы 1</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Заказы 2</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Заказы 3</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Заказы 4</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Заказы 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Сотрудничество</a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">Сотрудничество 1</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Сотрудничество 2</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Сотрудничество 3</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Сотрудничество 4</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Сотрудничество 5</a>
                                </li>
                            </ul>


                        </li>
                        <li class="menu-list__item">

                            <a href="" class="menu-list__link">Клиентам</a>

                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">О нас</a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">История создания</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">История создания</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Блог</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="" class="menu-list__link">Контакты </a>
                            <span class="menu-list__arrow">
                                <img class="" src="icon/header/menulist_arrow.png" alt="">
                            </span>

                            <ul class="sublist ">
                                <div class="arrow_back">
                                    Назад
                                </div>

                                <li class="sublist__item">
                                    <a href="">Контакты 1</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Контакты 2</a>
                                </li>
                                <li class="sublist__item">
                                    <a href="">Контакты 3</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <div class="menu-contacts ">
                        <div class="menu-contacts__label">Новости в удобном формате:</div>
                        <div class="menu-contacts__social">
                            <img src="icon/header/fb.png" alt="" class="menu-contacts__item">
                            <img src="icon/header/vk.png" alt="" class="menu-contacts__item">
                            <img src="icon/header/inst.png" alt="" class="menu-contacts__item">
                        </div>
                    </div>

                    <div class="menu-search">
                        <input class="menu-search__input" type="text" placeholder="Найди голубя, который тебя клюнул">
                        <div class="menu-search__icon">
                            <img src="icon/header/menu_search.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <form class="modal-window" id="modal-window" action="php/order_call.php" method="post">
            <div class="modal-window__field">
                <div class="modal-window__label">Имя</div>
                <input type="text" class="modal-window__input" name="name">
            </div>
            <div class="modal-window__field">
                <div class="modal-window__label">Номер телефона</div>
                <input type="text" class="modal-window__input" name="number">
            </div>
            <input type="submit" value="Отправить" class="modal-window__button">
        </form>
    </div>


</header>


<main class="main">