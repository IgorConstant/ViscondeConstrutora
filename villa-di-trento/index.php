<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Villa Di Trento é um empreendimento de apartamentos com infraestrutura completa para sua família mudar o conceito de viver e muito bem.">
    <meta name="keywords" content="Empreendimento, Villa Di Trento, Visconde Construtora, Infraestrutura, Minha Casa Minha Vida, MRV, Itu, São Paulo">
    <meta name="author" content="Igor Henrique Constant - Duetto.AG">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">


    <title>Villa di Trento</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '416828639496046');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=416828639496046&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <header>
        <?php require('pages/header.php') ?>
    </header>


    <main>
        <section id="intro">
            <?php require('pages/intro.php') ?>
        </section>
        <section id="form-area">
            <?php require('pages/form.php') ?>
        </section>
        <section id="itens-de-lazer">
            <?php require('pages/itens-lazer.php') ?>
        </section>
        <section id="galeria">
            <?php require('pages/galeria.php') ?>
        </section>
        <section id="chamada-mrv">
            <?php require('pages/chamada-mrv.php') ?>
        </section>
        <section id="plantas">
            <?php require('pages/plantas.php') ?>
        </section>
        <section id="tour-virtual">
            <?php require('pages/tour-virtual.php') ?>
        </section>
        <section id="parallax">
            <?php require('pages/parallax.php') ?>
        </section>
        <section id="social">
            <?php require('pages/social.php') ?>
        </section>
    </main>


    <footer id="form-footer">
        <?php require('pages/footer.php') ?>
    </footer>

    <div id="copyright">
        <?php require('pages/copyright.php') ?>
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
    <script src="assets/js/main.js"></script>
    <script src="scripts/anaproform1.js"></script>
    <script src="scripts/anaproform2.js"></script>
    <script src="scripts/cookies.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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