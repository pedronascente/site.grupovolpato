<div class="bg-volpato-escuro p-3 text-white wow fadeIn" data-wow-delay="0.3s">         
    <div class="header-form text-white text-center p-3 font-weight-bold">
        <h4 class="font-weight-bold text-uppercase " style="font-size:24px;font-weight: 900">SOLICITE SUA COTAÇÃO</h4>
        <span class=" lead">Basta preencher o formulário abaixo que ligamos para você.</span>              
    </div>
    <form id="formulario-captacao" action="enviar_captacao/index.php" data-toggle="validator" role="form" method="post">
        <div class="content pt-3">
            <div class="form-group">
                <input type="text"  name="captacao_cliente" class="form-control form-control-lg"  placeholder=" SEU NOME" required>
            </div>
            <div class="form-group" >
                <div id="resposta-captacao"></div>  
                <input  type="text"  name="captacao_telefone1"  id="telefone-captacao"  class="phone_with_ddd form-control form-control form-control-lg" placeholder="SEU TELEFONE" required>
            </div>
            <div class="form-group">
                <input  name="captacao_email" type="text" class="form-control form-control-lg" placeholder="SEU E-MAIL" required>
            </div>
            <div class="form-group">
                <select id="interesse" name="captacao_interesse" required="" class="text-muted form-control form-control-lg">
                    <option value="1">ALARME COMERCIAL</option>
                    <option value="2">ALARME RESIDÊNCIAL</option>
                </select>
            </div>
            <div class=" form-group">
                <textarea   name="captacao_obs"  class="form-control form-control-lg  text-area" rows="5"  placeholder="DIGITE SUA MENSAGEM" id="mensagem"></textarea>
            </div>
            <input name="origem" value="<?=(!empty($_SERVER['QUERY_STRING']))?$_SERVER['QUERY_STRING']:$_SERVER['REQUEST_URI'];?>" type="hidden">
            <button id="botao-captacao" type="submit"  class="btn btn-block btn-danger btn-lg">
                ENVIAR
            </button> 
        </div>
    </form>
</div> 


