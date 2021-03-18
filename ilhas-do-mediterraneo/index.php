<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor - Agência Duetto - Itu/SP - https://www.duetto.ag/ ">
    <meta name="description" content="São mais de 30 opções de lazer incríveis, no Ilhas do Mediterrâneo todo dia será como estar em férias. Venha vivenciar essa experiência.">
    <meta name="keywords" content="Ilhas do Mediterrâneo, Visconde Construtora, Itu, São Paulo, Interior Paulista, Empreendimentos, Condominio Vertical">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">

    <!-- OGTags -->
    <meta property="og:url" content="https://www.ilhasdomediterraneo.com.br/vemproilhas/">
    <meta property="og:description" content="São mais de 30 opções de lazer incríveis, no Ilhas do Mediterrâneo todo dia será como estar em férias. Venha vivenciar essa experiência.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Vem pro Ilhas!">
    <meta property="og:site_name" content="Ilhas do Mediterrâneo">

    <title>Ilhas do Mediterrâneo - Vem Pro Ilhas </title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">


    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WQMNDVX');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s)

        {
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

        fbq('init', '216700642845769');

        fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=216700642845769&ev=PageView&noscript=1" /></noscript>

    <!-- End Facebook Pixel Code -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQMNDVX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <?php include('pages/header.php'); ?>
    </header>

    <main>
        <section id="intro">
            <?php include('pages/intro.php'); ?>
        </section>

        <section id="empreendimento">
            <?php include('pages/o-empreendimento.php'); ?>
        </section>

        <section id="fotos-empreendimento">
            <?php include('pages/fotos-empreendimento.php'); ?>
        </section>

        <section id="localizacao">
            <?php include('pages/localizacao.php') ?>
        </section>

        <section id="plantas">
            <?php include('pages/plantas.php') ?>
        </section>
    </main>


    <footer id="contato">
        <?php include('pages/footer.php'); ?>
    </footer>

    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="align-center-mobile">
                        <p class="m-0">VISCONDE CONSTRUTORA - 2020 - TODOS OS DIREITOS RESERVADOS</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="align-center-mobile">
                        <p class="produzido-por m-0">Produzido por <a target="_blank" href="https://www.agenciaduetto.com.br">AGÊNCIA DUETTO</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="infos">
        <div class="container">
            <div class="row">
                <p class="text-center registro">Incorporação registrada sob nº. R.15, em 09/12/2014, à margem da matrícula 20.735, do Cartório de Registro de Imóveis e anexos da Comarca de Itu/SP. O projeto encontra-se aprovado junto à Prefeitura Municipal de Itu através do processo nº 7872/2013 e Alvará nº 650/2014, expedido em 04/08/2014. Os móveis, equipamentos, acessórios e paisagismo são meramente ilustrativos e não são parte integrante do imóvel. Os materiais de acabamento constantes no material descritivo anexo ao contrato prevalecem sobre as ilustrações. Valores conforme disponibilidade de unidades. CRECI nº 24.264-J</p>
            </div>
        </div>
    </section>

    <section id="social-bar">
        <?php include('pages/social-bar.php') ?>
    </section>

    <section id="alert">
        <div class="container">
            <div class="cookie-popup cookie-popup--short cookie-popup--dark">
                <div>
                    Esse site utiliza Cookies, para lhe oferecer uma experiência personalizada, você pode saber mais em <a target="_blank" href="https://www.ilhasdomediterraneo.com.br/vemproilhas/politica-de-privacidade">Politica de Privacidade</a>
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
    <script src="scripts/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('[data-youtube]').youtube_background();
        });
    </script>

    <script type="text/javascript">
        $("#cel-1, #cel-2").mask("(00) 00000-0000");
    </script>
</body>

</html>