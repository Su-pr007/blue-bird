<?php
$con = new PDO('mysql:dbname=blue_bird;host=mysql', 'user', 'password');

const arr_menu = [
    [
        'name' => 'Главная',
        'url' => '/index.php',
        'sublist' => [

        ],
    ],
    [

        'name' => 'Виды птиц',
        'url' => '/index.php',
        'sublist' => [
            [
                'name' => 'Виды птиц',
                'url' => '/index.php',
            ],
            [
                'name' => 'Виды птиц 2',
                'url' => '/index.php',
            ],
            [
                'name' => 'Виды птиц 3',
                'url' => '/index.php',
            ],
            [
                'name' => 'Виды птиц 4',
                'url' => '/index.php',
            ],
            [
                'name' => 'Виды птиц 5',
                'url' => '/index.php',
            ],
        ],
    ],
    [
        'name' => 'Популярное',
        'url' => '/index.php',
        'sublist' => [
            [
                'name' => 'Популярное 1',
                'url' => '/index.php',
            ],
            [
                'name' => 'Популярное 2',
                'url' => '/index.php',
            ],
            [
                'name' => 'Популярное 3',
                'url' => '/index.php',
            ],
        ],
    ],
    [
        'name' => 'Заказы',
        'url' => '/index.php',
        'sublist' => [


        ],
    ],
    [
        'name' => 'Сотрудничество',
        'url' => '/index.php',
        'sublist' => [
            [
                'name' => 'Сотрудничество 1',
                'url' => '/index.php',
            ],
            [
                'name' => 'Сотрудничество 2',
                'url' => '/index.php',
            ],
            [
                'name' => 'Сотрудничество 3',
                'url' => '/index.php',
            ],

        ],
    ],
    [
        'name' => 'Клиентам',
        'url' => '/index.php',
        'sublist' => [


        ],
    ],
    [
        'name' => 'О нас',
        'url' => '/index.php',
        'sublist' => [


        ],
    ],
    [
        'name' => 'Контакты',
        'url' => '/index.php',
        'sublist' => [

            [
                'name' => 'Контакты 1',
                'url' => '/index.php',
            ],
            [
                'name' => 'Контакты 2',
                'url' => '/index.php',
            ],


        ],
    ],
];

const arr_mainSlider = [
    [
        'url'=>'/icon/main_slider/slide1.jpg',
        'label'=>'Голубь',
        'text'=>'Adipisci animi consequatur dolorem facere fugit idillo incidunt iure tempore veniam',
        'color'=>'',
    ],
    [
        'url'=>'icon/main_slider/slide2.jpg',
        'label'=>'Бабочка',
        'text'=>'Addipisci animi consequatur dolorem facere fugit idillo incidunt iure tempore veniam',
        'color'=>'white',
    ],
    [
        'url'=>'icon/main_slider/slide3.jpg',
        'label'=>'Феникс',
        'text'=>'Adipisci animi consequatur dolorem facere fugit idillo incidunt iure tempore veniam',
        'color'=>'',
    ],
    [
        'url'=>'icon/main_slider/slide4.jpg',
        'label'=>'Воробей',
        'text'=>'Adipisci animi consequatur dolorem facere fugit idillo incidunt iure tempore veniam',
        'color'=>'',
    ],
    [
        'url'=>'icon/main_slider/slide5.jpg',
        'label'=>'Цветок',
        'text'=>'Adipisci animi consequatur dolorem facere fugit idillo incidunt iure tempore veniam',
        'color'=>'white',
    ],
];

