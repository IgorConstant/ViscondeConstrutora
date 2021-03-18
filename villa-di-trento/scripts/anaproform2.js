$(document).ready(function () {
    //Valores Predefinidos


    $("#frmContatoFooter #btnFooter").click(function (e) {
        e.preventDefault();

        // Lista de parâmetros
        var ProdutoKey = document.getElementById('ProdutoKey').value;
        var Key = document.getElementById('Key').value;
        var CampanhaKey = document.getElementById('CampanhaKey').value;
        var CanalKey = document.getElementById('CanalKey').value;
        var KeyIntegradora = document.getElementById('KeyIntegradora').value;
        var KeyAgencia = document.getElementById('KeyAgencia').value;
        var Midia = document.getElementById('Midia').value;

        var nome = $("#nomeFooter").val(),
            telefone = $("#cel-2").val().replace(/[^\d]+/g, ''),
            ddd = telefone.length > 9 ? telefone.substring(0, 2) : '',
            email = $("#emailFooter").val(),
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
                    $("#message-2").html('Obrigatório preencher Nome, E-mail e Celular.');
                    $("#message-box-2").removeClass('alert-success').addClass('alert-danger');
                    $("#message-box-2").show();
                    return false;
                }
            },
            success: function (response) {
                console.log('Response', response);
                $('.loading').hide();


                //ERRO
                if (!response.Sucesso) {
                    $("#message-2").html('Erro: ' + response.Mensagem);
                    $("#message-box-2").removeClass('alert-success').addClass('alert-danger');
                    $("#message-box-2").show();
                    return true
                }

                //SUCESSO
                $("#message-box-2").removeClass('alert-danger').addClass('alert-success');
                $("#message-2").html("Cadastro criado com sucesso. ");
                $("#message-box-2").show();
                window.location = "obrigado";

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert("Erro: " + thrownError + " -- " + xhr.status);
                $('.loading').hide();
            }
        });
    });

});