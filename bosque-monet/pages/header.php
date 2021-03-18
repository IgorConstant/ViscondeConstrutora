<div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
    <nav class="uk-container uk-padding-small" uk-navbar="mode: click">
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="#">
                <img src="assets/images/logo-header-bm.png" alt="Logo - Bosque Monet">
            </a>
        </div>
        <div class="uk-navbar-right uk-visible@l">
            <ul class="uk-navbar-nav">
                <li><a href="#empreendimento" uk-scroll="offset: 120">O Empreendimento</a></li>
                <li><a href="#fotos" uk-scroll="offset: 120">Fotos</a></li>
                <li><a href="#plantas" uk-scroll="offset: 120">Plantas</a></li>
                <li><a class="btn-wpp" href="https://api.whatsapp.com/send?phone=5512996370706&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20empreendimento%20Bosque%20Monet" target="_blank"><i class="fab fa-whatsapp"></i> &nbsp; Contato</a></li>
            </ul>
        </div>
        <!-- Canvas -->
        <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas"></span></a>
    </nav>
</div>

<section id="form-keys" style="display: none;">
    <div class="container">
        <form id="frm-contato" class="form-horizontal">
            <div class="form-group">
                <label for="Key">Key: </label>
                <input type="text" id="Key" class="form-control">
            </div>
            <div class="form-group">
                <label for="ProdutoKey">ProdutoKey: </label>
                <input type="text" id="ProdutoKey" class="form-control">
            </div>
            <div class="form-group">
                <label for="CampanhaKey">CampanhaKey: </label>
                <input type="text" id="CampanhaKey" class="form-control">
            </div>
            <div class="form-group">
                <label for="CanalKey">CanalKey: </label>
                <input type="text" id="CanalKey" class="form-control">
            </div>
            <div class="form-group">
                <label for="KeyIntegradora">KeyIntegradora: </label>
                <input type="text" id="KeyIntegradora" class="form-control">
            </div>
            <div class="form-group">
                <label for="Midia">Mídia: </label>
                <input type="text" id="Midia" class="form-control">
            </div>
            <div class="form-group">
                <label for="KeyAgencia">KeyAgencia: </label>
                <input type="text" id="KeyAgencia" class="form-control">
            </div>
        </form>
    </div>
</section>

<div class="image">
    <div class="uk-container">
        <div class="uk-child-width-expand@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="text-chamada">
                        <h2><mark class="dark-green"><span>Agora</span> viver bem <br> não é caro, <span>e</span> lazer não <br> é Privilégio!</mark></h2>
                        <img class="uk-margin-top" width="70%" src="assets/images/frase-bm.png" alt="Slogan Bosque Monet">
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-middle">
                    <div class="form-area uk-padding">
                        <h3 class="uk-margin-remove">Cadastre-se e aproveite as <br> <span>condições de lançamento</span></h3>
                        <form action="" method="POST" class="uk-grid-small uk-margin-top" id="frmHeader" uk-grid>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="formNome">Nome Completo *</label>
                                <input class="uk-input" type="text" name="nome" id="formNome">
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="formMail">Seu E-mail *</label>
                                <input class="uk-input" type="email" name="email" id="formMail">
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="formTelefone">Seu Telefone *</label>
                                <input class="uk-input" type="text" name="telefone" id="formTelefone">
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" id="btnSend">Quero saber mais informações</button>
                            </div>
                        </form>
                        <br>
                        <div id="message-box" class="alert alert-dismissible" style="display:none">
                            <p id="message" class="text-center m-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- OffCanvas -->
<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true;">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <div class="brand uk-text-center">
            <a class="uk-offcanvas-brand" href="#"><img src="assets/images/logo-header-bm.png" alt="Logo Offcanvas - Bosque Monet"></a>
        </div>
        <ul class="uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
            <li><a href="#empreendimento" uk-scroll="offset: 120">O Empreendimento</a></li>
            <li><a href="#fotos" uk-scroll="offset: 120">Fotos</a></li>
            <li><a href="#plantas" uk-scroll="offset: 120">Plantas</a></li>
            <li><a class="btn-wpp" href="https://api.whatsapp.com/send?phone=5512996370706&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20empreendimento%20Bosque%20Monet"" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
            <li class="uk-nav-divider"></li>
            <li class="social-icons"><a href="https://co.linkedin.com/company/visconde-construtora" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li class="social-icons"><a href="https://pt-br.facebook.com/viscondeconstrutora" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li class="social-icons"><a href="https://www.instagram.com/viscondeconstrutora/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="social-icons"><a href="https://api.whatsapp.com/send?phone=5512996370706&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20empreendimento%20Bosque%20Monet"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </div>
</div>