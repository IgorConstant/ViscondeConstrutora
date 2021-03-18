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

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
            <div class="bg-predio">
                <div class="background-img-visconde">
                    <img class="img-fluid" src="assets/images/logo-novo.png" alt="logo-banner-contato">
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
            <div class="bg-green fade-in">
                <h2 style="font-size: 35px">Converse com a <br> nossa equipe</h2>
                <img class="img-fluid" src="assets/images/detail.png" alt="detalhe">
                <form method="POST" action="" id="frmContato">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome completo</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Insira seu nome completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Celular</label>
                        <input name="celular" id="cel-1" type="text" class="form-control" placeholder="Número do seu celular">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail">
                    </div>
                    <button type="submit" id="bt-enviar" class="btn btn-default" value="save-prospect">QUERO RECEBER UM CONTATO</button>
                </form>
                <br>
                <div id="message-box" class="alert alert-dismissible" style="display:none">
                    <p id="message" class="text-center m-0"></p>
                </div>
            </div>
        </div>
    </div>
</div>