$('body').on('submit', '#modal-window', function (e) {
    e.preventDefault();
    let form = $(this);
    let alert = form.find('.message-alert');
    $.ajax(
        {
            url: '/php/order_call.php',
            type: 'post',
            data: form.serialize(),
            success: function (data) {
                if (data == 1) {
                    alert.html('<div class="alert alert-success">Сообщение отправлено</div>');
                } else {
                    alert.html('<div class="alert alert-danger">Поля заполнены не верно</div>');
                }
            }, error: function () {
                alert.html('<div class="alert alert-danger">Ошибка</div>');
            }
        }
    );
});

$('body').on('submit', '.order__form', function (e) {
    e.preventDefault();
    let form = $(this);

    $.ajax(
        {
            url: '/php/order.php',
            type: 'post',
            data: form.serialize(),
            success: function (data) {
                if (data == 1) {
                    alert("Сообщение отправлено");
                    form.trigger('reset');
                } else {
                    alert("Поля заполнены не верно");
                }
            }, error: function () {
                alert("Ошибка");

            }
        }
    );
});


