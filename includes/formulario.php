<div class="container"  style="padding: 50px 10px">			
    <div class="row margin-bottom-60">				
        <div class="col-sm-6">					
            <h3 class="widget-title big lined">
                <span>A VOLPATO</span>
            </h3>					
            <p>
                A Volpato é uma empresa Brasileira, presente em todos os estados do Brasil e está há mais de duas décadas no mercado de segurança, atuando principalmente nas áreas de rastreamento veicular, portaria e segurança eletrônica.
            </p>
            <p>
                Ao longo dos anos fomos desenvolvendo soluções tecnológicas de forma a aprimorar e otimizar os processos sempre com eficiência e comprometimento, o que nos tornou referência em inovação, infraestrutura e qualidade.
            </p>
            <p>
                Acreditamos que atualmente o assunto segurança passou a ser prioridade para todos nós e é tão sério e complexo que deve ser discutido e tratado com profissionais competentes e com experiência para apresentar soluções simples e imediatas, assim minimizando e reduzindo os riscos ocasionais. Para aumentar a segurança de qualquer patrimônio são necessárias técnicas e equipamentos adequados e de ultima geração que assegurem a eficácia no atendimento. Só assim, a segurança sobrevive no tempo em que vivemos.
            </p>				
            <p>
                <a href="a-volpato.php" class="read-more">SAIBA MAIS</a>
            </p>					
        </div>

        <div class="col-sm-6" id="quickQuoteForm_wrapper">					
            <div class="featured-widget">						
                <h3 class="widget-title">
                    ENTRE EM CONTATO CONOSCO
                </h3>						
                <p>
                    Preencha o formulário abaixo que em breve um de nossos consultores entrará em contato com você tirar todas suas dúvidas. 
                </p>						
                <form class="pt-4" action="enviar_captacao/index.php" role="form" data-toggle="validator" method="post" id="formulario"  name="FORMULARIO_PAGINA_HOME" >
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
                               <input name="origem" value="<?=(!empty($_SERVER['QUERY_STRING']))?$_SERVER['QUERY_STRING']:$_SERVER['REQUEST_URI'];?>" type="hidden">
                               <input  type="submit" id="botao" class="btn btn-danger pull-right" value="ENVIAR AGORA">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>			
    </div>
</div>