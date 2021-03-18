$(document).ready(function () {
    $("#btnchange").click(function () {
        $("#text-chamada").fadeOut(function () {
            $("#text-chamada").text(($("#text-chamada").text() == 'FECHAR') ? 'VER TODAS AS FOTOS' : 'FECHAR').fadeIn();
        })
    })
});