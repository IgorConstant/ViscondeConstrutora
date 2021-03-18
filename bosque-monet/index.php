<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WF8FHHF');</script>
	<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agora viver bem não é caro, e lazer não é Privilégio!">
    <meta name="keywords" content="Visconde Construtora, Bosque Monet, Jacareí, Conforto, Lazer, Apartamentos">
    <meta name="author" content="Igor Henrique Constant - Duetto.Ag">
    <title>Bosque Monet - Visconde Construtora</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF8FHHF"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <header>
        <?php include('pages/header.php') ?>
    </header>

    <main>
        <section id="empreendimento">
            <?php include('pages/empreendimento.php') ?>
        </section>
        <section id="fotos">
            <?php include('pages/fotos.php') ?>
        </section>
        <section id="parallax">
            <?php include('pages/parallax.php') ?>
        </section>
        <section id="plantas">
            <?php include('pages/plantas.php') ?>
        </section>
        <section id="video-block">
            <?php include('pages/video-block.php') ?>
        </section>
        <section id="tour">
            <?php include('pages/tour.php') ?>
        </section>
        <section id="localizacao">
            <?php include('pages/localizacao.php') ?>
        </section>
        <section id="contato">
            <?php include('pages/contato.php') ?>
        </section>
        <section id="sobre-visconde">
            <?php include('pages/sobre-visconde.php') ?>
        </section>
        <section id="social">
            <?php include('pages/social.php') ?>
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
    </main>


    <footer>
        <?php include('pages/footer.php') ?>
    </footer>

    <!-- JS -->
    <script src="assets/js/main.js"></script>
    <script src="scripts/cookieAlert.js"></script>
    <script src="scripts/anaproHeader.js"></script>
    <script src="scripts/anaproModal.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $("#formTelefone, #formModalTelefone").mask("(00) 00000-0000");

        function popupChat(mylink, windowname) {
            window.open(mylink, windowname, 'width="300",height="450",scrollbars="1"');
            return false;
        };
    </script>
</body>

</html>