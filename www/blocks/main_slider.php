<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
?>
<div class="slider swiper">

    <div class="slider__wrapper swiper-wrapper">

        <?php foreach (arr_mainSlider as $item){ ?>
        <div class="slider__slide swiper-slide">
            <div class="slider__image">
                <img src= <?= $item['url']?> alt="">
            </div>
            <div class="slider__description"  >
                <div class="slider__label"  style="color: <?= $item['color']?>;" ><?= $item['label']?></div>
                <div class="slider__text"  style="color: <?= $item['color']?>;" ><?= $item['text']?>
                </div>

            </div>

        </div>
        <?php }?>


    </div>

    <div class="slider__pagination swiper-pagination"></div>
    <button class="slider__button">Информация</button>


</div>
