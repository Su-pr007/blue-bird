<div class="order">
    <div class="order__wrapper">
        <div class="order__container container1">
            <div class="order__content">
                <div class="order__label">Заказ</div>
                <div class="order__description">Мы найдём птицу твоей мечты</div>
                <form class="order__form" action="php/order_product.php" method="post">
                    <input type="email" name="email" class="order__input order__input-number" placeholder="Ё-mail">
                    <input type="text" name="product" class="order__input order__input-product"
                           placeholder="Вид товара">
                    <input type="text" name="message" class="order__input order__input-description"
                           placeholder="Комментарий">

                    <button class="order__button" type="submit">Отправить</button>

                </form>
                <div class="message-alert"></div>
                <img src="icon/order/order-image.png" alt="" class="order__image">
            </div>

        </div>
    </div>
</div>