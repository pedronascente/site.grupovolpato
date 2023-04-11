<section id="ligamos" class="hidden-md-down py-8 ">
    <div class="container">
        <div class="text-center text-sm-left row">
            <div class="col-md-9 pb-3">
                <h3 class="font-weight-bold text-title">SOLICITE SUA COTAÇÃO</h3>
                <span class="text-muted"> Solicite sua cotação que entraremos em contato o mais rapído possível. </span> </div>
            <div class="col-md-3">
                <button  type="button" data-toggle="modal" data-target="#modal" class="text-center btn btn-danger btn-lg p-4 mb-3 radius">SOLICITAR COTAÇÃO</button>
            </div>
        </div> 
    </div>
</section>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column px-3 pt-3">           
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>       
                <h4 class="font-weight-bold modal-title" id="exampleModalLabel">SOLICITE SUA COTAÇÃO</h4>
                <span class="text-muted">Preencha o formulario abaixo que um consultor de segurança entrará em contato</span>        
            </div>
            <div class="text-muted modal-body py-0">
                <form id="formulario-modal"  action="enviar_captacao/index.php" data-toggle="validator" role="form" method="post">
                    <div class="content py-3">
                        <div class="form-group">
                            <input type="text" name="captacao_cliente"  class="form-control form-control-lg" placeholder=" SEU NOME" required>
                        </div>
                        <div class="form-group">
                            <div id="resposta-modal"></div>  
                            <input id="telefone-modal"  type="text" name="captacao_telefone1"   class="phone_with_ddd form-control form-control form-control-lg" placeholder="SEU TELEFONE" required>
                        </div>
                        <div class=" form-group">
                            <input type="email" name="captacao_email" class="form-control form-control-lg" placeholder="SEU E-MAIL" required>
                        </div>
                        <div class="form-group">
                            <select id="interesse" name="captacao_interesse" required="" class="custom-select form-control form-control-lg">
                                <option value="1">ALARME COMERCIAL</option>
                                <option value="2">ALARME RESIDÊNCIAL</option>
                            </select>
                        </div>
                        <div class=" form-group">
                            <textarea   name="captacao_obs" class="form-control form-control-lg  text-area" rows="5"  placeholder="DIGITE SUA MENSAGEM" id="mensagem"></textarea>
                        </div>                                                                 
                        <input name="origem" value="<?= (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : $_SERVER['REQUEST_URI']; ?>" type="hidden">
                        <button id="botao-modal" type="submit"  class="btn btn-block btn-danger btn-lg">
                            ENVIAR
                        </button> 
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>