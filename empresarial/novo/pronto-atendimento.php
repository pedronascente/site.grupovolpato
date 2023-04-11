<?php include_once __DIR__ . '/includes/header.php'; ?> 
<section>
<div class="main-title title-pronto-atendimento d-flex align-items-center">
    <div class="container">
      <h1 class="pt-5 ">PRONTO ATENDIMENTO</font></h1>
    </div>
  </div>
  <div class="main-breadcrumb d-flex align-items-center">
    <div class="container">
      <ol class="breadcrumb ">
       <li class="breadcrumb-item"><a href="index.php">Home</a></li>        
        <li class="breadcrumb-item active"><a href="alarme-monitorado.php">Alarme Monitorado</a></li>
        <li class="breadcrumb-item active">Pronto Atendimento</li>
     </ol> 
   </div>
 </div>
</section>

<section>
    <div class=" container text-muted">
        <div class="row py-5">
            <div class="col-md-8 col-12">                
                    <p>
                            Em caso de algum disparo do sistema de alarme disponibilizamos unidades volantes para o pronto atendimento e verificação da ocorrência.
                            </p>
                            <p>
                             Conforme o plano de monitoramento contratado, nossas viaturas podem acompanhar a abertura e fechamento, executar rondas, etc...
                            </p>
                            <p>
                              Nossa Equipe de Pronto Atendimento está preparada para atender a nossos clientes a qualquer momento. Nossos carros e motos passam por manutenções preventivas regulares, contam com moderno dispositivo de rastreamento e apoio da Central de Monitoramento 24 horas para proporcionar a nossos clientes atendimento mais rápido e efetivo
                            </p>
                    <div class="row">
                        <div class="col-6">
                          <img class="img-fluid" src="public/img/pronto-atendimento.jpg">
                        </div>
                         <div class="col-6">
                          <img class="img-fluid" src="public/img/pronto-atendimento2.jpg">
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
