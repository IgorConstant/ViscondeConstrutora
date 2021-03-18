<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Duetto - Itu/SP - https://www.duetto.ag/ ">
    <meta name="description" content="O empreendimento Verdes & Lagos está chegando para mudar seu conceito quando o assunto é morar bem, perto da natureza e com áreas de lazer completas e equipadas">
    <meta name="keywords" content="Empreendimento, Itu, São Paulo, Minha Casa Minha Vida, Verdes e Lagos, Construtora Visconde, Preço, Qualidade, Itens de Lazer ">
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- OpenGraph for Facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Verdes e Lagos">
    <meta property="og:description" content="O empreendimento Verdes & Lagos está chegando para mudar seu conceito quando o assunto é morar bem, perto da natureza e com áreas de lazer completas e equipadas">
    <meta property="og:image" content="https://verdeselagos.com.br/assets/images/banner-og.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:type" content="website">


    <title>Verdes e Lagos</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- GoogleFont -->
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <section id="banner-intro">
        <?php require('pages/banner-intro.php'); ?>
    </section>

    <section id="intro-text">
        <?php require('pages/intro-text.php'); ?>
    </section>

    <section id="galeria">
        <?php require('pages/galeria.php') ?>
    </section>

    <section id="tour-virtual">
        <?php require('pages/tour-virtual.php') ?>
    </section>

    <section id="middle-area">
        <?php require('pages/middle.php'); ?>
    </section>

    <section id="map-area">
        <?php require('pages/map-area.php'); ?>
    </section>

    <section id="social">
        <?php require('pages/social.php') ?>
    </section>

    <footer>
        <?php require('pages/footer.php'); ?>
    </footer>

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


    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="scripts/anaproForm.js"></script>
    <script src="scripts/anaproFormFooter.js"></script>
    <script src="scripts/cookies.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#cel-1, #cel-2").mask("(00) 00000-0000");

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