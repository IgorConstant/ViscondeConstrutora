/***********FORMULÁRIO CONTATO************************** */

$('.formphpfooter').on('submit', function () {
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
                $('.formphpfooter').html("<div id='form-erro'></div>");
                $('#form-erro').html("<div class='uk-alert-danger uk-text-center' uk-alert> Desculpe, mas não foi possível enviar a mensagem, entre em contato pelo telefone: (11) 2222-2897s </div>")
                    .hide()
                    .fadeIn(1500, function () {
                        $('#form-erro');
                    });
            } else {

                $('.formphpfooter').html("<div id='form-send'></div>");
                $('#form-send').html("<div class='uk-alert-success uk-text-center' uk-alert> Sua Mensagem Foi Enviada Com Sucesso! <br> Em breve entraremos em contato </div>")
                    .hide()
                    .fadeIn(1500, function () {
                        $('#form-send');
                    });
            };
        },
        error: function (response) {
            $('.formphpfooter').html("<div id='form-erro'></div>");
            $('#form-erro').html("<div class='uk-alert-danger uk-text-center' uk-alert> Desculpe, mas não foi possível enviar a mensagem, entre em contato pelo telefone: (11) 2222-2897s </div>")
                .hide()
                .fadeIn(1500, function () {
                    $('#form-erro');
                });
        }
    });

    return false;
});