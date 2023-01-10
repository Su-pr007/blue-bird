$('body').on('submit', '#modal-window', function (e) {
    e.preventDefault();

    $.ajax(
        {
            url: '/php/order_call.php',
            type: 'post',
            data: {
                name: $('.modal-window__input[name="name"]').val(),
                number: $('.modal-window__input[name="number"]').val(),
            },
            success:function (data, e){
              $(e.target).html(data);

            },
        }
    );
});

