$(document).ready(function () {

    // PEGA O SRC DIRETAMENTE DO BOTÃO
    var $videoSrc;
    $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);



    // ASSIM QUE O MODAL ABRIR, O VÍDEO IRÁ ENTRAR EM AUTOPLAY
    $('#myModal').on('shown.bs.modal', function (e) {

        // INDICA QUE QUANDO TERMINAR O VÍDEO, NÃO IRÁ MOSTRAR NENHUM VÍDEO RELACIONADO
        $("#video-modal").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })



    // PARA O VÍDEO ASSIM QUE FECHAR O MODAL
    $('#myModal').on('hide.bs.modal', function (e) {

        $("#video-modal").attr('src', $videoSrc);
    })

});
