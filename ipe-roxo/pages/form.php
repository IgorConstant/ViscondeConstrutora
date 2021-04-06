<section id="form-keys" style="display: none;">
    <div class="uk-container">
        <form id="frm-contato" class="form-horizontal">
            <div class="form-group">
                <label for="Key">Key: </label>
                <input type="text" id="Key">
            </div>
            <div class="form-group">
                <label for="ProdutoKey">ProdutoKey: </label>
                <input type="text" id="ProdutoKey">
            </div>
            <div class="form-group">
                <label for="CampanhaKey">CampanhaKey: </label>
                <input type="text" id="CampanhaKey">
            </div>
            <div class="form-group">
                <label for="CanalKey">CanalKey: </label>
                <input type="text" id="CanalKey">
            </div>
            <div class="form-group">
                <label for="KeyIntegradora">KeyIntegradora: </label>
                <input type="text" id="KeyIntegradora">
            </div>
            <div class="form-group">
                <label for="Midia">Mídia: </label>
                <input type="text" id="Midia">
            </div>
            <div class="form-group">
                <label for="KeyAgencia">KeyAgencia: </label>
                <input type="text" id="KeyAgencia" class="form-control">
            </div>
        </form>
    </div>
</section>


<div class="uk-container">
    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-large" uk-grid>
        <div>
            <div>
                <div class="form-area-mobile">
                    <div class="form-content">
                        <p class="badge uk-text-center uk-margin-remove">Breve Lançamento</p>
                        <h3>Cadastre-se e aproveite as <br> <span>condições de pré-lançamento.</span></h3>
                        <form id="mobileForm" action="" method="POST" class="uk-grid-small uk-margin-top" uk-grid>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="formNome">Nome Completo *</label>
                                <input class="uk-input" type="text" name="nome" id="mobileNome">
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="formMail">Seu E-mail *</label>
                                <input class="uk-input" type="email" name="email" id="mobileMail">
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="formTelefone">Seu Telefone *</label>
                                <input class="uk-input" type="text" name="telefone" id="mobileTelefone">
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" id="btnSendMobile">Quero saber mais informações</button>
                            </div>
                            <br>
                            <div id="message-box" class="alert alert-dismissible" style="display:none">
                                <p id="message" class="text-center m-0"></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="img-chamada uk-padding uk-margin-top">
                    <div class="img-content" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="assets/images/casa-em-condominio.png" alt="Casa em Condomínio Fechado">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div class="form-area">
                    <div class="form-content">
                        <p class="badge uk-text-center uk-margin-remove">Breve Lançamento</p>
                        <h3>Cadastre-se e aproveite as <br> <span>condições de pré-lançamento.</span></h3>
                        <form id="mainForm" action="" method="POST" class="uk-grid-small uk-margin-top" uk-grid>
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
                            <br>
                            <div id="message-box" class="alert alert-dismissible" style="display:none">
                                <p id="message" class="text-center m-0"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>