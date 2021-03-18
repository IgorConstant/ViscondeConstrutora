<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor - Agência Duetto - Itu/SP - https://www.duetto.ag/ ">
    <meta name="description" content="Faça um investimento seguro, invista num imóvel Visconde!">

    <!-- Open Graph -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Invest Ilhas">
    <meta property="og:site_name" content="Invest Ilhas">
    <meta property="og: image" content="http://agenciaduetto.com.br/invest-ilhas/assets/images/banner-parallax.png" />
    <meta property="og:image:type" content="image/png">

    <title>Invest Ilhas</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159685758-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-159685758-2');
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="assets/images/logo-header.png" alt="logo-header"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#investimento">Comparação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#parallax">O Empreendimento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#video">Vantagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn scroll" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="form-area">
            <?php require('pages/intro.php') ?>
        </section>
        <section id="investimento">
            <?php require('pages/investimento.php') ?>
        </section>
        <section id="parallax">
            <?php require('pages/parallax.php') ?>
        </section>
        <section id="oportunidades">
            <?php require('pages/oportunidades.php') ?>
        </section>
        <section id="video">
            <?php require('pages/video.php') ?>
        </section>
        <section id="seguranca">
            <?php require('pages/seguranca.php') ?>
        </section>
        <section id="recompra">
            <?php require('pages/recompra.php') ?>
        </section>
        <section id="localizacao">
            <?php require('pages/localizacao.php') ?>
        </section>
        <section id="social-bar">
            <?php require('pages/social-bar.php') ?>
        </section>
    </main>

    <footer id="contato">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-6 p-0">
                    <div class="bg-black p-4">
                        <br>
                        <div class="text-footer d-flex justify-content-center">
                            <p>Faça o download <br> da apresentação <br> de investimento</p>
                        </div>
                        <br>
                        <div class="btn-cta" data-aos="zoom-in">
                            <a class="btn btn-primary cta-footer" href="#" role="button" data-toggle="modal" data-target="#modalDownload">Quero fazer o download</a>
                        </div>
                        <br><br>
                        <div class="finish-area d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/logo-white.png" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 p-0">
                    <div class="form-contato">
                        <h2>Quero falar com <br> a equipe de investimentos</h2>
                        <br>
                        <img src="assets/images/detail.png" alt="detail">
                        <div class="mt-3"></div>
                        <form method="POST" action="" id="frm-contato2" data-aos="zoom-in">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome completo</label>
                                <input name="nome" type="text" class="form-control" id="nome-form2" placeholder="Insira seu nome completo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input name="celular" id="cel-2" type="text" class="form-control" placeholder="Número do seu celular">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">E-mail</label>
                                <input name="email" type="email" class="form-control" id="email-form2" placeholder="Seu melhor e-mail">
                            </div>
                            <button type="submit" id="bt-enviar-form2" class="btn btn-default" value="save-prospect">QUERO RECEBER UM CONTATO</button>
                        </form>
                        <br>
                        <div id="message-box-2" class="alert alert-dismissible" style="display:none">
                            <p id="message-2" class="text-center m-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Visconde Construtora - <?php echo date("Y"); ?> - Todos os direitos reservados</p>
                </div>
                <div class="col-md-6">
                    <p class="produzido-por">Produzido por <a target="_blank" href="https://www.agenciaduetto.com.br">Agência Duetto</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="juridico">
        <div class="container">
            <p class="text-center">Incorporação registrada sob nº. R.15, em 09/12/2014, à margem da matrícula 20.735, do Cartório de Registro de Imóveis e anexos da Comarca de Itu/SP. O projeto encontra-se aprovado junto à Prefeitura Municipal de Itu através do processo nº 7872/2013 e Alvará nº 650/2014, expedido em 04/08/2014. Os móveis, equipamentos, acessórios e paisagismo são meramente ilustrativos. Os materiais de acabamento constantes no material descritivo anexo ao contrato prevalecem sobre as ilustrações. Valores conforme disponibilidade de unidades. CRECI nº 24.264-J</p>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Faça o download da apresentação de investimentos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" id="frmContato3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome completo</label>
                            <input name="nome" type="text" class="form-control" id="nome3" placeholder="Insira seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Celular</label>
                            <input name="celular" id="cel-3" type="text" class="form-control" placeholder="Número do seu celular">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email3" placeholder="Seu melhor e-mail">
                        </div>
                        <button type="submit" id="bt-enviar3" class="btn btn-default" value="save-prospect">QUERO RECEBER UM CONTATO</button>
                    </form>
                    <br>
                    <div id="message-box" class="alert alert-dismissible" style="display:none">
                        <p id="message" class="text-center m-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="alert">
        <div class="container">
            <div class="cookie-popup cookie-popup--short cookie-popup--dark">
                <div>
                    Esse site utiliza Cookies, para lhe oferecer uma experiência personalizada, você pode saber mais em <a target="_blank" href="https://www.ilhasdomediterraneo.com.br/vemproilhas/pages/politica-de-privacidade.php">Politica de Privacidade</a>
                </div>
                <div class="cookie-popup-actions">
                    <button>Aceito</button>
                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="assets/js/main.js"></script>
    <script src="scripts/anapro.js"></script>
    <script src="scripts/anapro2.js"></script>
    <script src="scripts/anapro3.js"></script>
    <script src="scripts/cookies.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $("#cel-1, #cel-2, #cel-3").mask("(00) 00000-0000");

        function popupChat(mylink, windowname) {
            window.open(mylink, windowname, 'width="300",height="450",scrollbars="1"');
            return false;
        };
    </script>

    <script>
        AOS.init();
    </script>
</body>

</html>