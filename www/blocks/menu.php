<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
global $con;


?>
<ul class="menu-list menu-list_header">
    <?php foreach (arr_menu as $item) { ?>
        <li class="menu-list__item">
            <a href="<?= $item['url'] ?>" class="menu-list__link"> <?= $item['name'] ?> </a>
            <?php if (!empty($item['sublist'])) { ?>
                <span class="menu-list__arrow">
                    <img class="" src="icon/header/menulist_arrow.png" alt="">
                </span>
                <ul class="sublist ">
                    <div class="arrow_back">Назад</div>
                    <?php foreach ($item['sublist'] as $item) { ?>
                        <li class="sublist__item">
                            <a href="<?= $item['url'] ?>"><?= $item['name'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
    <?php } ?>
</ul>