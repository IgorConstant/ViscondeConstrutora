<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Salto, Interior, Visconde Construtora, Lagos d'Icaraí, Torres d'Icarai, Condominio Vertical, São Paulo, Interior Paulista, Apartamentos">
    <meta name="description" content="Pensado no seu bem-estar, conforto e momentos de lazer incríveis com quem você ama, o Torres D´Icaraí proporciona tranquilidade e soluções atuais para você chamar de lar.">
    <meta name="author" content="Igor Henrique Constant - Duetto.ag">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- OGTags -->

    <title>Torres D' Icaraí</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;700;900&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <header>
        <?php require('pages/header.php') ?>
    </header>

    <main>
        <section id="banner-topo">
            <?php require('pages/banner-topo.php') ?>
        </section>
        <section id="intro">
            <?php require('pages/intro.php') ?>
        </section>
        <section id="about">
            <?php require('pages/about.php') ?>
        </section>
        <section id="itens-de-lazer">
            <?php require('pages/itens-de-lazer.php') ?>
        </section>
        <section id="galeria">
            <?php require('pages/galeria.php') ?>
        </section>
        <section id="plantas">
            <?php require('pages/plantas.php') ?>
        </section>
        <section id="tour">
            <?php require('pages/tour.php') ?>
        </section>
        <section id="apresentacao">
            <?php require('pages/apresentacao.php') ?>
        </section>
        <section id="social">
            <?php require('pages/social.php') ?>
        </section>
    </main>

    <footer id="contato">
        <?php require('pages/footer.php') ?>
    </footer>

    <div class="copyright">
        <div class="uk-container uk-padding">
            <div uk-grid>
                <div class="uk-width-1-6@m uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div><img src="assets/images/logo-tdi.png" alt="Logo - TDI"></div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div>
                        <p class="text-copy">Visconde Construtora - 2021 - Todos os direitos reservados Produzido por Agência Duetto</p>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div><img src="assets/images/logo-visconde.png" alt="Logo - Visconde"></div>
                </div>
                <div class="uk-width-1-6@m uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div><img src="assets/images/logo-elleven.png" alt="Logo - Elleven"></div>
                </div>
                <div class="uk-width-auto@m uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div>
                        <div class="social-icons">
                            <ul>
                                <li><a href="https://co.linkedin.com/company/visconde-construtora" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://pt-br.facebook.com/viscondeconstrutora" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.instagram.com/viscondeconstrutora/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="alert">
        <div class="container">
            <div class="cookie-popup cookie-popup--short cookie-popup--dark">
                <div>
                    Esse site utiliza Cookies, para lhe oferecer uma experiência personalizada, você pode saber mais em <a target="_blank" href="politica-de-privacidade">Politica de Privacidade</a>
                </div>
                <div class="cookie-popup-actions">
                    <button>Aceito</button>
                </div>
            </div>
        </div>
    </section>


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="scripts/cookies.js"></script>
    <script src="scripts/anaproFooter.js"></script>
    <script src="scripts/anaproModal.js"></script>
    <script src="scripts/anaproMobile.js"></script>
    <script src="scripts/anaproDesk.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script>
        $("#cel-1, #cel-2, #cel-3, #cel-4").mask("(00) 00000-0000");

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