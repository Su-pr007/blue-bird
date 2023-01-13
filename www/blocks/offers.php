<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
global $con;
$sql = 'SELECT * FROM `offers`';
$offers = $con->query($sql);
$arr_offers = $offers->fetchAll();
?>
<?php if (!empty($arr_offers)) { ?>
    <div class="offers">
        <div class="container1">

            <div class="offers__label">Предложения</div>

            <div class="offers-grid">

                <?php foreach ($arr_offers as $item) { ?>
                    <div class="offers-grid__item">
                        <div class="offers-grid__item-wrapper">
                            <img src="<?= $item['url'] ?>" alt="" class="offers-grid__image">
                            <div class="offers-grid__label"
                                 style="color: <?= $item['color'] ?>;"><?= $item['label'] ?></div>
                        </div>
                    </div>
                <?php } ?>

                <button class="offers-grid__all">
                    Паказать всё
                </button>
            </div>
        </div>
    </div>
<?php } ?>