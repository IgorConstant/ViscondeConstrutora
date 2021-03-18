/***********FORMULÁRIO CONTATO************************** */

$('.formdownload').on('submit', function () {
    var emailContato = "igor@agenciaduetto.com.br";

    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[name]').each(function (index, value) {
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name] = value;
    });

    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function (response) {

            if ($('[name="leaveblank"]').val().length != 0) {
                $('.formdownload').html("<div id='form-erro'></div>");
                $('#form-erro').html("<div class='alert alert-danger' role='alert'> Ocorreu um problema no envio, você pode entrar em contato pelo telefone ou no " + emailContato + " </div>")
                    .hide()
                    .fadeIn(1500, function () {
                        $('#form-erro');
                    });
            } else {

                window.location = "pages/obrigado-download.php";
            };
        },
        error: function (response) {
            $('.formdownload').html("<div id='form-erro'></div>");
            $('#form-erro').html("<div class='alert alert-danger' role='alert'> Ocorreu um problema no envio, você pode entrar em contato pelo telefone ou no " + emailContato + " </div>")
                .hide()
                .fadeIn(1500, function () {
                    $('#form-erro');
                });
        }
    });

    return false;
});