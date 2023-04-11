<script src="https://www.google.com/recaptcha/api.js?render=6Lc4Ce4aAAAAAKPGrw7cgkmZELMbmNj2EAEyQFzb"></script>
<script type="text/javascript">
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lc4Ce4aAAAAAKPGrw7cgkmZELMbmNj2EAEyQFzb', {action: 'submit'}).then(function(token) {
          var response =  document.getElementById('_token_response');    
          response.value = token;
         // alert(response.value )
      });
      grecaptcha.execute('6Lc4Ce4aAAAAAKPGrw7cgkmZELMbmNj2EAEyQFzb', {action: 'submit'}).then(function(token) {
          var response2 =  document.getElementById('_token_response2');    
          response2.value = token;
         // alert(response2.value )
      });
    });
</script> 

 <?php    

function  get_formulario($tipo_form){
    
    $origem = (!empty($_SERVER['QUERY_STRING']))?$_SERVER['QUERY_STRING']:$_SERVER['REQUEST_URI'];;

    switch ($tipo_form) {
        case 'principal':
            return ' 
               <form 
                    name="FORMULARIO_PAGINA_HOME"
                    class="pt-4" 
                    action="enviar_captacao/index.php" 
                    role="form" 
                    data-toggle="validator" 
                    method="post" 
                    id="formulario">

                    <div class="contact-form-small">
                        <div class="row">
                            <div class="col-xs-12  col-md-6">
                                <div class="form-group">
                                    <input type="text"  name="captacao_cliente" placeholder="Seu Nome" size="40" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="captacao_email" placeholder="Seu E-mail" size="40" value="" required>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-6" style="position: relative;">
                                <div id="resposta"></div>
                                <div class="form-group" >
                                    <input  type="text" name="captacao_telefone1" placeholder="Telefone" size="40" value=""  class="phone_with_ddd" id="telefone"   maxlength="15" required>
                                </div>
                                <select  id="interesse" name="captacao_interesse">
                                    <option value="5">Rastreamento Veicular</option>
                                    <option value="1">Segurança Eletrônica</option>
                                    <option value="6">Serviços de Portaria</option>
                                    <option value="projetos-integrados">Projetos Integradas</option>
                                </select>
                            </div>
                            <div class="col-xs-12  col-md-12">
                                <div class="form-group">
                                    <textarea   name="captacao_obs" placeholder="Mensagem*" rows="10" cols="40"  required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-12">
                             <input type="hidden" name="origem" value="'.$origem.'" >
                             <input type="hidden" name="token_response" id="_token_response">
                             <input 
                                type="submit" 
                                id="botao" 
                                class="btn btn-danger pull-right" 
                                value="ENVIAR AGORA">
                         </div>
                     </div>
                 </div>
                </form>      
            ';
        break;
        case 'modal':
            return ' 
                <form  
                    name="FORMULARIO_MODAL_HOME"
                    class="pt-4" 
                    action="enviar_captacao/index.php" 
                    role="form" 
                    data-toggle="validator" 
                    method="post" 
                    id="formularioModal">

                    <div class="contact-form-small">
                        <div class="row">
                            <div class="col-xs-12  col-md-6">
                                <div class="form-group">
                                    <input type="text"  name="captacao_cliente" placeholder="Seu Nome" size="40" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="captacao_email"  placeholder="Seu E-mail" size="40" value="" required>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-6" style="position: relative;">
                                <div id="respostaModal"></div>
                                <div class="form-group">
                                    <input  type="text"  name="captacao_telefone1" class="phone_with_ddd" id="telefoneModal"  placeholder="Telefone" size="40" value="" maxlength="15" required>
                                </div>
                                <select  id="interesse" name="captacao_interesse">
                                    <option value="5">Rastreamento Veicular</option>
                                    <option value="1">Segurança Eletrônica</option>
                                    <option value="6">Serviços de Portaria</option>
                                    <option value="projetos-integrados">Projetos Integradas</option>
                                </select>
                            </div>
                            <div class="col-xs-12  col-md-12">
                                <div class="form-group">
                                    <textarea placeholder="Mensagem*" rows="10" cols="40" name="captacao_obs" required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-12">
                                <input name="origem" value="'.$origem.'" type="hidden">
                                <input type="hidden" name="token_response" id="_token_response2">
                                <button 
                                    type="submit"  
                                    id="botaoModal" 
                                    class="btn btn-danger pull-right">
                                    ENVIAR AGORA
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            ';
        break;
        
        case 'projetos-integrados':
            return ' 
                <form 
                    name="FORMULARIO_PROJETOS_INTEGRADOS"
                    action="enviar_captacao/index.php" 
                    data-toggle="validator" 
                    method="post" 
                    id="formularioProjetos">

                    <div class="contact-form-small">
                        <div class="row">
                            <div class="col-xs-12  col-md-12">
                                <div class="form-group">
                                    <input name="captacao_cliente"  type="text" placeholder="Seu Nome" size="40" value="" required>
                                </div>
                                <div class="form-group">
                                    <input name="captacao_email" type="email" placeholder="Seu E-mail" size="40" value=""  required>
                                </div>
                                <div class="form-group" style="position: relative;">
                                    <div id="respostaProjetos"></div>
                                    <input  name="captacao_telefone1" class="phone_with_ddd" id="telefoneProjetos" type="text" placeholder="Telefone" size="40" value=""  maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <textarea  name="captacao_obs" placeholder="Mensagem*" aria-invalid="false" rows="10" cols="40" required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-12">
                                <input type="hidden" name="captacao_interesse" value="projetos-integrados">
                                <input type="hidden" name="token_response" id="_token_response">
                                <input name="origem" value="'.$origem.'" type="hidden">
                                <button 
                                    id="botaoProjetos" 
                                    type="submit" 
                                    class="btn btn-danger pull-right">
                                    ENVIAR AGORA
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            ';
        break;
        case 'contato':
            return ' 
                <form 
                    name="FORMULARIO_CONTATO"
                    id="formulario" 
                    data-toggle="validator" 
                    class="aSubmit" 
                    method="post" 
                    action="enviar_captacao/index.php">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="captacao_cliente"  placeholder="Seu Nome*" aria-invalid="false" aria-required="true" size="40" value="" required>
                            </div>
                            <div class="form-group">
                                <input  name="captacao_email" type="email" placeholder="Seu E-mail*" aria-invalid="false" aria-required="true" size="40" value="" required>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <div id="resposta"></div>
                                <input type="tel" name="captacao_telefone1" class="phone_with_ddd" id="telefone"  placeholder="Seu Telefone*" aria-invalid="false" aria-required="true" size="40" value="" >
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Mensagem*" aria-invalid="false" rows="10" cols="40" name="captacao_obs" required></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12  col-md-12">
                            <input type="hidden" name="captacao_interesse" value="projetos-integrados">
                            <input name="origem" value="'.$origem.'" type="hidden">
                            <input type="hidden" name="token_response" id="_token_response">
                            <button 
                                id="botao" 
                                type="submit" 
                                class="btn btn-danger pull-right">
                                ENVIAR AGORA
                            </button>
                        </div>  
                    </div>
                </form>
            ';
        break;
        case'cftv':
            return '
                <form 
                    name="FORMULARIO_CONTATO"
                    id="formulario" 
                    data-toggle="validator" 
                    class="aSubmit" 
                    method="post" 
                    action="enviar_captacao/index.php">
                
                    <div class="contact-form-small">
                        <div class="row">
                            <div class="col-xs-12  col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Seu Nome" size="40" value="" name="captacao_cliente" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Seu E-mail" size="40" value="" name="captacao_email" required>
                                </div>
                                <div class="form-group" style="position: relative;">
                                    <div id="respostaProjetos"></div>
                                    <input class="phone_with_ddd" id="telefoneProjetos" type="text" placeholder="Telefone" size="40" value="" name="captacao_telefone1" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Mensagem*" aria-invalid="false" rows="10" cols="40" name="captacao_obs" required></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="captacao_interesse" value="projetos-integrados">
                            <input type="hidden" name="token_response" id="_token_response">
                            <button 
                                id="botao" 
                                type="submit" 
                                class="btn btn-danger pull-right">
                                ENVIAR AGORA
                            </button>
                        </div>
                    </div>
                </form>
            ';
        break;
        default:
            return 'nenhum formulario registrado!';
        break;
    }
}


/*
case 'segunda-via-boleto':
            return ' 
                <form data-toggle="validator" method="post" action="segunda-via.php" id="formularioBoleto">
                    <div class="contact-form-small">
                        <div class="row">
                            <div class="col-xs-12  col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Seu Nome" aria-invalid="false" size="40" value="" name="nome" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Seu E-mail" aria-invalid="false" size="40" value="" name="email" required>
                                </div>          
                                <div class="form-group" style="position: relative;">
                                    <div id="respostaBoleto"></div>
                                    <input class="phone_with_ddd" id="telefoneBoleto" type="text" placeholder="Telefone" aria-invalid="false" size="40" value="" name="telefone" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="CPF/CNPJ" aria-invalid="false" size="40" value="" name="cpfCnpj" required>
                                </div>   
                                <div class="form-group">
                                    <select  id="serviço" name="servico">
                                        <option>Rastreamento Veicular</option>
                                        <option>Alarme Monitorado</option>
                                        <option>CFTV</option>
                                        <option>Portaria Virtual</option>
                                    </select>   
                                </div>          
                                <div class="form-group">
                                    <textarea placeholder="Mensagem*" aria-invalid="false" rows="10" cols="40" name="mensagem" required></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12  col-md-12">
                                <button id="botaoBoleto" type="submit" class="btn btn-danger pull-right">
                                    ENVIAR AGORA
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            ';
        break;
        case 'area-do-cliente':
            return ' 
                <form action="https://www.webalarme.com.br/acessoExterno.php" method="post" name="0.1_form" target="_blank" onsubmit="return window.confirm( & quot; Você está enviando informações para uma página externa.\nTem certeza? & quot; );">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input placeholder="Seu Login" name="central" id="central" type="text" maxlength="8" class="input">
                            </div>
                            <div class="form-group">
                                <input placeholder="Sua Senha" name="senha" id="senha" type="password" maxlength="10" size="30" class="input" required>
                            </div>
                            <input name="cliente" type="hidden" value="1488">
                            <input name="urlLogout" type="hidden" value="https://www.grupovolpato.com"> 
                            <div class="col-xs-12  col-md-12">
                                <button id="botao" type="submit" class="btn btn-danger pull-right">
                                    ENTRAR
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            ';
        break;
*/