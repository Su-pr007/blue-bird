<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/prolog.php';
global $con;
$sql = 'SELECT * FROM `review`';
$review = $con->query($sql);
$arr_review = $review->fetchAll();
?>
<?php if (!empty($arr_review)) { ?>
    <div class="review">
        <div class="review__wrapper">
            <div class="review__container container1">
                <div class="review__label">Отзовы довольных клиентов</div>
                <div class="review-slider swiper">
                    <div class="review-slider__wrapper swiper-wrapper">


                        <?php foreach ($arr_review as $item) { ?>
                            <div class="review-slider__slide swiper-slide">
                                <div class="review-slider__top">
                                    <img src="<?= $item['url'] ?>" alt="" class="review-slider__logo">
                                    <div class="review-slider__top-content">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <div class="rating__value" data-value="<?= $item['stars'] ?>"></div>
                                                <div class="rating__items">
                                                    <input type="radio" class="rating__item" value="" name="rating">
                                                    <input type="radio" class="rating__item" value="" name="rating">
                                                    <input type="radio" class="rating__item" value="" name="rating">
                                                    <input type="radio" class="rating__item" value="" name="rating">
                                                    <input type="radio" class="rating__item" value="" name="rating">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-slider__logo-title"><?= $item['label'] ?></div>
                                    </div>
                                </div>
                                <div class="review-slider__main">
                                    <div class="review-slider__user"><?= $item['name'] ?></div>
                                    <div class="review-slider__text ">
                                        <?= $item['text'] ?>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
                <div class="review-slider__button-prev swiper-button-prev"></div>
                <div class="review-slider__button-next swiper-button-next"></div>

            </div>
        </div>
    </div>
<?php } ?>