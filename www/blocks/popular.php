<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
global $con;
$sql = 'SELECT * FROM `popular`';
$popular = $con->query($sql);
$arr_popular = $popular->fetchAll();
?>
<?php if (!empty($arr_popular)) { ?>
    <div class="popular">
        <div class="popular__container container1">
            <div class="popular__label">
                Популярное
            </div>

            <div class="popular-slider swiper">
                <div class="popular-slider__wrapper swiper-wrapper">

                    <?php foreach ($arr_popular as $item) { ?>
                        <div class="popular-slider__slide swiper-slide">
                            <div class="popular-slider__main">
                                <img src="<?= $item['url'] ?>" alt="" class="popular-slider__image">
                                <div class="popular-slider__text"><?= $item['label'] ?></div>
                            </div>
                            <div class="popular-slider__status"></div>
                            <div class="popular-slider__prise">
                                <div class="popular-slider__quantity"><?= $item['quantity'] ?></div>
                                <button class="popular-slider__button"><?= $item['prise'] ?>$</button>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="popular-slider__button-prev swiper-button-prev"></div>
            <div class="popular-slider__button-next swiper-button-next"></div>
        </div>
    </div>
<?php } ?>