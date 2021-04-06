<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Visconde Construtora realiza seu sonho da casa própria com o loteamento Ipê Roxo Residencial.">
    <meta name="keywords" content="Visconde Construtora, Porto Feliz, São Paulo, Interior, Casa Própria, Conceito, Morar Bem">
    <meta name="author" content="Igor Henrique Constant">

    <title>Ipê Roxo</title>

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;600;700&family=Sora:wght@600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <header>
        <?php require('pages/header.php') ?>
    </header>

    <main>
        <section id="banner"></section>
        <section id="formArea">
            <?php require('pages/form.php') ?>
        </section>
        <section id="about">
            <?php require('pages/about.php') ?>
        </section>
        <section id="gallery">
            <?php require('pages/gallery.php') ?>
        </section>
        <section id="aboutVisconde">
            <?php require('pages/about-visconde.php') ?>
        </section>
    </main>

    <footer>
        <?php require('pages/footer.php') ?>
    </footer>

    <section id="social">
        <?php require('pages/social.php') ?>
    </section>

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

    <section id="juridico">
        <div class="uk-container">
            <p style="font-size:14px;text-align:center;padding:20px 10px;">O empreendimento somente será comercializado após o Registro de Incorporação expedido pelos órgãos responsáveis. Imagens meramente ilustrativas e preliminares, podendo sofrer alterações sem aviso prévio. Áreas de lazer entregues conforme memorial descritivo. Maiores informações consultar stand de vendas. CRECI nº 24.264-J</p>
        </div>
    </section>

    <!-- JS -->
    <script src="assets/js/main.js"></script>
    <script src="scripts/cookieAlert.js"></script>
    <script src="scripts/anapro.js"></script>
    <script src="scripts/anaproMobile.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#formTelefone, #mobileTelefone").mask("(00) 00000-0000");
    </script>
</body>

</html>