<div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
    <nav class="uk-container uk-padding-small" uk-navbar="mode: click">
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="#">
                <img width="80%" src="assets/images/minify/brand-ipe.png" alt="Logo Ipê Roxo">
            </a>
        </div>
        <div class="uk-navbar-right uk-visible@l">
            <ul class="uk-navbar-nav">
                <li><a href="#about" uk-scroll="offset: 120">Itens de Lazer</a></li>
                <li><a href="#gallery" uk-scroll="offset: 120">Galeria</a></li>
                <li><a class="btn-wpp" href="#formArea" uk-scroll="offset: 350">Garanta sua Unidade</a></li>
            </ul>
        </div>
        <!-- Canvas -->
        <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas"></span></a>
    </nav>
</div>

<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true;">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <div class="brand uk-text-center">
            <a class="uk-offcanvas-brand" href="#"><img src="assets/images/minify/brand-ipe.png" alt="Logo Offcanvas - Ipê Roxo"></a>
        </div>
        <ul class="uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
            <li><a href="#about" uk-scroll="offset: 120">Itens de Lazer</a></li>
            <li><a href="#gallery" uk-scroll="offset: 120">Galeria</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5515997895604&text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20o%20Empreendimento%20Ip%C3%AA%20Roxo" target="_blank"><i class="fab fa-whatsapp"></i> Garanta sua Unidade</a></li>
            <li class="uk-nav-divider"></li>
            <li class="social-icons"><a href="https://co.linkedin.com/company/visconde-construtora" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li class="social-icons"><a href="https://pt-br.facebook.com/viscondeconstrutora" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li class="social-icons"><a href="https://www.instagram.com/viscondeconstrutora/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>