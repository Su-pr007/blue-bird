<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
?>

<div class="footer-menu ">

    <ul class="footer-menu__list ">
        <?php foreach (arr_menu as $item) { ?>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link"> <?= $item["name"] ?> </a>

            </li>
        <?php } ?>
    </ul>

    <div class="footer-additional">
        <a href="" class="footer-additional__link"></a>
    </div>
</div>