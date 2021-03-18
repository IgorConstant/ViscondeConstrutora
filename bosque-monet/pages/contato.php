<div class="uk-container uk-padding-small">
    <div class="text-area">
        <p class="uk-text-center uk-margin-remove"><a href="#modalContact" uk-toggle>Clique e saiba mais</a></p>
    </div>
</div>

<div id="modalContact" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="form-area">
            <h3 class="uk-margin-remove">Cadastre-se e aproveite as <br> <span>condições de pré-lançamento</span></h3>
            <small>Entrada facilitada e parcelas a partir de R$ 790,00</small>
            <form action="" method="POST" class="uk-grid-small uk-margin-top" id="frmModal" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="formModalNome">Nome Completo *</label>
                    <input class="uk-input" type="text" name="nome" id="formModalNome">
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label" for="formModalEmail">Seu E-mail *</label>
                    <input class="uk-input" type="email" name="email" id="formModalEmail">
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label" for="formModalTelefone">Seu Telefone *</label>
                    <input class="uk-input" type="text" name="celular" id="formModalTelefone">
                </div>
                <div class="uk-width-1-1">
                    <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" id="btnModalSend">Quero saber mais informações</button>
                </div>
            </form>
            <br>
            <div id="message-box" class="alert alert-dismissible" style="display:none">
                <p id="message" class="text-center m-0"></p>
            </div>
        </div>
    </div>
</div>