<?php include_once __DIR__ . '/includes/header.php'; ?> 

<section>
<div class="main-title title-contato d-flex align-items-center">
    <div class="container">
      <h1 class="pt-5 ">CONTATO</font></h1>
    </div>
  </div>
  <div class="main-breadcrumb d-flex align-items-center">
    <div class="container">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="index.php">Home</a></li>     
        <li class="breadcrumb-item active">Contato</li>
     </ol> 
   </div>
 </div>
 </section>
</section>

<!--------------------------------- SECTION CONTATO ---------------------------------->
<section id="contato" class="py-5 text-muted">
  <div class=" container">    
<div class="row">
      <div class=" col-12 col-sm-4 col-lg-4">            
      <div class="contact-info">                              
        <p><strong class="text-title text-uppercase font-weight-bold">Central de Vendas</strong><br>(51) 3511 9999</p>
        <p><i style="padding-top: 5px;" class="fa fa-envelope"></i> volpato@grupovolpato.com</p>                            
      </div>
      </div>
      <div class=" col-12 col-sm-8 col-lg-8">
      <h3 class="text-title font-weight-bold">ENVIE SUA MENSAGEM  </h3>
            <form class="formulario" id="formulario" data-toggle="validator" role="form" method="post" action="enviar_contato_2.php">       
            <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="name" name="nome" placeholder="SEU NOME" required>
          </div>
          
           <div class="form-group row" >
                                    <div class="col-md-3 col-4">
                                        <input type="text" class="form-control form-control-lg" name="ddd" placeholder="DDD" maxlength="2" required>
                                    </div>
                                        <div class="col-md-9 col-8">
                                            <input type="text" class="form-control form-control-lg" name="telefone" placeholder="SEU TELEFONE" maxlength="9" required>
                                        </div>
                                </div> 
                                <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="SEU E-MAIL" required>
          </div>
          <div class="form-group">
                                    <select name="assunto" class="text-muted form-control form-control-lg" id="exampleSelect1">
                                   <option selected>ESCOLHA O ASSUNTO DESEJADO</option>
                                  <option>ADMINISTRATIVO</option>
                                  <option>COMERCIAL</option>
                                  <option>FINANCEIRO</option>
                                </select>
                                </div>         
                    <div class="form-group">
                    <textarea class="form-control form-control-lg" type="textarea" name="mensagem" id="message" placeholder="SUA MENSAGEM" maxlength="140" rows="7"></textarea>                                          
                    </div>
            
     <button class="pull-right btn btn-danger btn-lg" onclick="ga('send', 'event', 'link','click', 'Captação Realizada');" value="Enviar" type="submit"> ENVIAR MENSAGEM </button>   
        </form>
 
        </div>
      </div>
  </div>
</section>
<?php include_once __DIR__ . '/includes/footer.php'; ?>


