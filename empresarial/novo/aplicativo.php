<?php include_once __DIR__ . '/includes/header.php'; ?> 
<section>
<div class="main-title title-aplicativo d-flex align-items-center">
    <div class="container">
        <h1 class="main-title__primary pt-5 ">APLICATIVO VOLPATO</h1> 
  </div>
</div>
  <div class="main-breadcrumb">
    <div class="container">
      <ol class="breadcrumb ">
       <li class="breadcrumb-item"><a href="index.php">Home</a></li>        
        <li class="breadcrumb-item active"><a href="alarme-monitorado.php">Alarme Monitorado</a></li>
        <li class="breadcrumb-item active">Aplicativo Volpato</li>
     </ol> 
   </div>
 </div>
</section>


</section>

<section>
    <div class=" container text-muted">
        <div class="row py-5">
            <div class="col-md-8 col-12">                
                   <p class="text-left">
           Através do aplicativo da Volpato você poderá acompanhar diretamente via celular ou tablet todas as atividades do seu sistema de segurança. Por meio do aplicativo será possível saber o status do painel de alarme, armá-lo e desarmá-lo, visualizar as câmeras ao vivo, verificar eventos e ordens de serviço abertas e realizar chamadas telefônicas para contatos cadastrados no seu perfil. É a segurança que você precisa na palma da sua mão.
          </p>   
         
                    <div class="row d-flex flex-row align-items-center flex-wrap">
                       <div class="col-4">
                          <img class="img-fluid" src="public/img/app-volpato-seguranca-home.png">
                        </div>
                         <div class="col-8">
                         <strong>Disponível na Google Play e na Apple Store.</strong>
                             <div class="pt-5 d-flex flex-row align-items-center flex-wrap">                              
                              <div class="box-item"><a href="https://play.google.com/store/apps/details?id=br.com.segware.mysecurity.volpato" title="Baixar APP Rastremento Veicular Volpato" target="_blank" class="btn-app-gplay margin-bottom-20">
                                    <img src="public/img/button-google-play.png" alt="APP Rastremento Veicular Volpato Google Play" class="img-responsive">
                                  </a></div>
                              <div class="box-item"><a href="https://itunes.apple.com/br/app/volpato-seguran%C3%A7a/id1145015885?mt=8" title="Baixar APP Rastremento Veicular Volpato" target="_blank" class="btn-app-gplay margin-bottom-20">
                                    <img src="public/img/button-apple-store.png" alt="APP Rastremento Veicular Volpato Google Play" class="img-responsive">
                                  </a></div>
                            </div>
                        </div>
                        

                    </div>
                </div>
             <div class="col-md-4 col-12 hidden-xs-down">
      <div class="bg-volpato p-3 text-white wow fadeIn" data-wow-delay="0.3s">         
        <div class="header-form text-white text-center p-3 font-weight-bold">
          <h4 class="font-weight-bold text-uppercase " style="font-size:24px;font-weight: 900">SOLICITE SUA COTAÇÃO</h4>
          <span class=" lead">Basta preencher o formulário abaixo que ligamos para você.</span>              
        </div>
         <form action="http://gpi.ddns.me:9093/control/captacao.php" data-toggle="validator" role="form" method="post">
              <div class="content pt-3">
                       <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="nome" placeholder=" SEU NOME" required>
                                </div>
                               <div class="form-group row" >
                                    <div class="col-md-3 col-4 pr-0">
                                        <input type="text" class="form-control form-control-lg" name="ddd" placeholder="DDD" maxlength="2" required>
                                    </div>
                                        <div class="col-md-9 col-8">
                                            <input type="text" class="form-control form-control-lg" name="telefone" placeholder="SEU TELEFONE" maxlength="9" required>
                                        </div>
                                </div>
                                <div class=" form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="SEU E-MAIL" required>
                                </div>
                                 <div class="form-group">
                                    <select id="interesse" name="interesse" required="" class="text-muted form-control form-control-lg">
                                  <option value="alarme Residencial">ALARME RESIDÊNCIAL</option>
                                  <option value="alarme Comercial">ALARME COMERCIAL</option>
                                </select>
                                </div>
                                <div class=" form-group">
                                    <textarea class="form-control form-control-lg  text-area" rows="5" name="mensagem"  placeholder="DIGITE SUA MENSAGEM" id="mensagem"></textarea>
                                </div>
                                <input name="tipo_form" value="index.php" type="hidden">
                                       <input type="hidden" name="acao" value="form_grupoVolpato"> 
                                          <input type="hidden" name="origem" value="form-modal">  
                                          <input name="origem" value="www.grupovolpato.com/empresarial/obrigado.php" type="hidden"> 
                                          <input type="submit" name="Submit" class="submit btn btn-danger btn-lg btn-block" value="Solicitar Cotação">                             
                    </div>
                </form>
      </div>           
    </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
