<!---------------------------- FORMULARIO ------------------------------>
<section id="formulario" class="pb-5 bg-volpato">
    <div class="container">
        <div class="row">
 <div class="col-12 col-sm-12 col-md-6 col-lg-8  pt-5 text-white">
              <div class="box2">
                <h3 class="pb-4">
                    DEIXE QUE A VOLPATO CUIDA PRA VOCÊ
                </h3>
                <p>
                Atualmente o assunto segurança passou a ser prioridade para todos nós e é tão sério e complexo que deve ser discutido e tratado com profissionais competentes e com experiência para apresentar soluções simples e imediatas minimizando e reduzindo os riscos ocasionais.
                </p>

                <p>
                Para aumentar a segurança de qualquer estabelecimento ou veículo são necessárias técnicas e equipamentos adequados e de ultima geração que assegurem a eficácia no atendimento. Só assim, a segurança sobrevive no tempo em que vivemos.
                </p>
                <a class="text-white saiba-mais pl-3" href="a-volpato.php">Saiba Mais</a>
            </div>
     </div>
     <div class="hidden-sm-down col-12 ol-sm-6 col-md-6 col-lg-4" >
               <div class="p-3 text-white  wow fadeInLeft" style="background-color: #021326;margin-top: -60px;box-shadow:0px 0px 3px #333">         
        <div class="header-form text-white font-weight-bold">
          <h4 class="text-uppercase">SOLICITE SUA COTAÇÃO</h4>
          <span class="lead">Basta preencher o formulário abaixo que ligamos para você.</span>              
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
                                          <input name="origem" value="www.grupovolpato.com/residencial/obrigado.php" type="hidden"> 
                                          <input type="submit" name="Submit" class="submit btn btn-danger btn-lg btn-block" value="Solicitar Cotação">                               
                    </div>
                </form>
      </div>  
            </div>
     
     </div>
  </div>
       
    
</section>