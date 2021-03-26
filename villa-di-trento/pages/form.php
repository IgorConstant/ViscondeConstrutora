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


<div class="form-block">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div>
                <div class="uk-flex uk-flex-middle">
                    <img src="assets/images/new-detail.png" alt="detail">
                </div>
            </div>
            <div>
                <div>
                    <div class="form-contact">
                        <h3 class="uk-text-center">Cadastre-se e conheça</h3>
                        <form method="POST" action="" id="frmContato" uk-grid>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label">Seu nome *</label>
                                <input class="uk-input" id="nome" name="nome" type="text" placeholder="Insira seu nome completo" />
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label">Seu Telefone *</label>
                                <input class="uk-input" id="cel-1" name="celular" type="text" placeholder="Insira seu telefone" />
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label">Seu email *</label>
                                <input class="uk-input" id="email" name="email" type="email" placeholder="Insira seu E-mail" />
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" id="bt-enviar" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" value="save-prospect">QUERO RECEBER MAIS INFORMAÇÕES</button>
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


<div class="icons-area uk-padding uk-visible@l">
    <div class="uk-container">
        <table class="uk-table uk-table-middle">
            <tbody>
                <td><img src="assets/images/icon1.png" alt="icon1"></td>
                <td>Plantas de <br> <span>60m²</span> até <br> <span>105m²</span></td>
                <td><img src="assets/images/icon2.png" alt="icon2"></td>
                <td>Apartamentos <br> com <span>2 dorms</span> <br> sendo <span>1 suíte</span></td>
                <td><img src="assets/images/icon3.png" alt="icon3"></td>
                <td>Área de <br> lazer <br> <span>completa</span></td>
                <td><img src="assets/images/icon4.png" alt="icon4"></td>
                <td>Ampla <br> <span>Varanda <br> Gourmet</span></td>
            </tbody>
        </table>
    </div>
</div>

<div class="slider-mobile uk-text-center uk-hidden@l">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 2000">
        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-4@m">
            <li>
                <img src="assets/images/icon1.png" alt="icon1">
                <p>Plantas de <span>60m²</span> até <span>105m²</span></p>
            </li>
            <li>
                <img src="assets/images/icon2.png" alt="icon2">
                <p>Apartamentos com <span>2 dorms</span> sendo <span>1 suíte</span></p>
            </li>
            <li>
                <img src="assets/images/icon3.png" alt="icon3">
                <p>Área de lazer <span>completa</span></p>
            </li>
            <li>
                <img src="assets/images/icon4.png" alt="icon4">
                <p>Ampla <span>Varanda Gourmet</span></p>
            </li>
        </ul>
    </div>
</div>