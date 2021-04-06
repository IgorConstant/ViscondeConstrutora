$(document).ready(function () {
    //Valores Predefinidos
    document.getElementById('ProdutoKey').value = 'dutHacc57EU1';
    document.getElementById('Key').value = '6Jz37XZafGs1';
    document.getElementById('CampanhaKey').value = 'HVrqj61OPUA1';
    document.getElementById('CanalKey').value = '7ExUxUhTiRU1';
    document.getElementById('KeyIntegradora').value = '9401506C-9784-471F-B647-6C55F6814787';
    document.getElementById('KeyAgencia').value = 'd19bd11b-922d-4b3b-83af-64d0d1747402';
    document.getElementById('Midia').value = 'Landing Page - Ipê Roxo';

    $("#mainForm #btnSend").click(function (e) {
        e.preventDefault();

        // Lista de parametros
        var ProdutoKey = document.getElementById('ProdutoKey').value;
        var Key = document.getElementById('Key').value;
        var CampanhaKey = document.getElementById('CampanhaKey').value;
        var CanalKey = document.getElementById('CanalKey').value;
        var KeyIntegradora = document.getElementById('KeyIntegradora').value;
        var KeyAgencia = document.getElementById('KeyAgencia').value;
        var Midia = document.getElementById('Midia').value;

        var nome = $("#formNome").val(),
            telefone = $("#formTelefone").val().replace(/[^\d]+/g, ''),
            ddd = telefone.length > 9 ? telefone.substring(0, 2) : '',
            email = $("#formMail").val(),
            dados = {
                "Key": Key,
                "CampanhaKey": CampanhaKey,
                "ProdutoKey": ProdutoKey,
                "CanalKey": CanalKey,
                "Midia": Midia,
                "PessoaNome": nome,
                "PessoaEmail": email,
                "PessoaTelefones": [{
                    "Tipo": "OUTR",
                    "DDD": ddd,
                    "Numero": ddd.length > 0 ? telefone.substring(2, telefone.length) : telefone,
                    "Ramal": null
                }],
                "KeyIntegradora": KeyIntegradora,
                "KeyAgencia": KeyAgencia
            };

        console.log('Objeto enviado', dados);

        $.ajax({
            url: "https://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect",
            type: "POST",
            data: dados,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            beforeSend: function () {
                $('.loading').show();
                if (nome.length < 1 || email.length < 1 || telefone.length < 1) {
                    $('.loading').hide();
                    $("#message").html('ObrigatÃ³rio preencher nome, e-mail e celular e aceitar os termos');
                    $("#message-box").removeClass('alert-success').addClass('alert-danger');
                    $("#message-box").show();
                    return false;
                }
            },
            success: function (response) {
                console.log('Response', response);
                $('.loading').hide();



                //ERRO
                if (!response.Sucesso) {
                    $("#message").html('Erro: ' + response.Mensagem);
                    $("#message-box").removeClass('alert-success').addClass('alert-danger');
                    $("#message-box").show();

                    return true
                }

                //SUCESSO
                $("#message-box").removeClass('alert-danger').addClass('alert-success');
                $("#message").html("Obrigado pela mensagem, em breve entraremos em contato. ");
                $("#message-box").show();
                window.location = "obrigado";


            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert("Erro: " + thrownError + " -- " + xhr.status);
                $('.loading').hide();
            }
        });
    });

});