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
        <div class="col-lg-12 col-xl-6">
            <div class="bg-predio">
                <div class="selo-visconde" data-aos="fade-down">
                    <h1 style="cursor:pointer;" data-toggle="modal" data-target="#modalInfo1">Invista <span><br> com segurança <br> e garantia! <i class="fas fa-question-circle"></i></span></h1>
                    <p class="first">Plano Investidor</p>
                    <p class="two">Ilhas do Mediterrâneo</p>
                    <br> <br>
                    <img class="img-fluid" src="assets/images/selo-visconde.png" alt="selo">
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="form-contato">
                <h2>Fale com nossa equipe <br> de investimento</h2>
                <br>
                <img src="assets/images/detail.png" alt="detail">

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
<div class="bg-lightgreen">
    <div class="container">
        <div class="grid-area">
            <div class="grid-item">
                <i class="far fa-check-square"></i>
                <p>Chave na mão <br> <span>Pronto</span> <br> para alugar</p>
            </div>
            <div style="cursor:pointer;" class="grid-item">
                <i class="far fa-check-square"></i>
                <p data-toggle="modal" data-target="#modalInfo2"><span>Renda Garantida</span> <br> Nós alugamos para você <br> R$ 1.900 /mês <i class="fas fa-question-circle"></i></p>
            </div>
            <div class="grid-item">
                <i class="far fa-check-square"></i>
                <p>Perspectiva de <br> <span>Valorização</span> <br> de 10% em 1 ano</p>
            </div>
            <div style="cursor:pointer;" class="grid-item">
                <i class="far fa-check-square"></i>
                <p data-toggle="modal" data-target="#modalInfo4">rentabilidade <br> <span>154% acima</span> <br> Do CDI <i class="fas fa-question-circle"></i></p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalInfo1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalInfo1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>* A Visconde apresenta um plano de investimento que possibilita garantia de negócio para o investidor com contrato fechado. Dessa forma, a construtora se compromete a garantir um aluguel do apartamento, desde que não esteja locado, por um ano, no valor de R$ 1.900,00 por mês.</p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalInfo2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalInfo2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><i class="fas fa-question-circle"></i> A Visconde garante o aluguel através do investimento por R$ 1.900,00 por mês desde que sua unidade não esteja locada.</p>
                <p><i class="fas fa-question-circle"></i> Ao adquirir o imóvel, caso não consiga locar, o investidor terá direito a receber um aluguel mensal, por um ano, no valor de R$ 1.900,00 pago pela Visconde.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalInfo4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalInfo4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><i class="fas fa-question-circle"></i> Com investimento de R$ 380.000 ao comprar uma unidade no Ilhas do Mediterrâneo, o investidor, caso não alugue sua unidade, receberá da Visconde, por um ano, o aluguel no valor de R$ 1.900,00 por mês. Ou seja, um retorno de R$ 22.800/ano, uma rentabilidade de 6% que representa 154% a mais de retorno comparado com o CDI.</p>
            </div>
        </div>
    </div>
</div>