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
                    alert.html(data);
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
            url: '/php/order_product.php',
            type: 'post',
            data: form.serialize(),
            success: function (data) {
               alert(data);
            }, error: function () {
                alert("Ошибка");

            }
        }
    );
});


