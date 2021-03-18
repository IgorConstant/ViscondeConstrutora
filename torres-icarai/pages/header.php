<div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
    <nav class="uk-container" uk-navbar="mode: click">
        <div class="uk-navbar-left uk-hidden@l">
            <img src="assets/images/logo-tdi-header.png" alt="Logo - Header">
        </div>
        <div class="uk-navbar-center uk-visible@l">
            <ul class="uk-navbar-nav">
                <li><a href="#about" uk-scroll="offset: 120">Sobre</a></li>
                <li><a href="#itens-de-lazer" uk-scroll="offset: 120">Lazer</a></li>
                <li><a href="#galeria" uk-scroll="offset: 120">Galeria de Fotos</a></li>
                <li><a href="#plantas" uk-scroll="offset: 120">Plantas</a></li>
                <li><a href="#map" uk-scroll="offset: 120">Localização</a></li>
            </ul>
        </div>
        <!-- Canvas -->
        <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas"></span></a>
    </nav>
</div>

<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true;">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <div class="brand uk-text-center">
            <a class="uk-offcanvas-brand" href="#"><img src="assets/images/logo-tdi.png" alt="logo-tdi"></a>
        </div>
        <ul class="uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
            <li><a href="#" uk-scroll="offset: 120">Sobre</a></li>
            <li><a href="#" uk-scroll="offset: 120">Lazer</a></li>
            <li><a href="#" uk-scroll="offset: 120">Galeria de Fotos</a></li>
            <li><a href="#" uk-scroll="offset: 120">Plantas</a></li>
            <li><a href="#" uk-scroll="offset: 120">Localização</a></li>
            <li class="uk-nav-divider"></li>
            <li class="social-icons"><a href="https://co.linkedin.com/company/visconde-construtora" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li class="social-icons"><a href="https://pt-br.facebook.com/viscondeconstrutora" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li class="social-icons"><a href="https://www.instagram.com/viscondeconstrutora/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="social-icons"><a href="https://api.whatsapp.com/send?phone=5511976613883"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </div>
</div>