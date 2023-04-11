<?php    include_once("getFormularios.php");  ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="featured-widget">
                    <h3 class="widget-title"> ENTRE EM CONTATO CONOSCO </h3>
                    <p>Preencha o formulário abaixo que em breve um de nossos consultores entrará em contato com você tirar todas suas dúvidas. </p>
                    <div role="main" id="grupovolpato-form-modal-2ca19d99f5f08b31f61d"></div><script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script><script type="text/javascript"> new RDStationForms('grupovolpato-form-modal-2ca19d99f5f08b31f61d', 'null').createForm();</script>
                </div> 
            </div>    
        </div>
    </div>
</div>
<!----------------------------------------- Modal Boleto------------------------------------>
<div class="modal fade" id="modalBoleto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="featured-widget">
                    <h3 class="widget-title">
                        SOLICITE A SEGUNDA VIA DE BOLETO
                    </h3>
                    <p>
                        Aqui você pode solicitar a segunda via de boletos para pagamento de serviços contratados na Volpato. 
                    </p>
                     <?php echo get_formulario('segunda-via-boleto'); ?>
                </div>
            </div>    
        </div>
    </div>
</div>
<!----------------------------------------- Modal Cliente------------------------------------>
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="featured-widget">
                    <h3 class="widget-title">
                        ÁREA DO CLIENTE ALARMES
                    </h3>
                    <?php echo get_formulario('area-do-cliente'); ?>
                </div>
            </div>    
        </div>
    </div>
</div>

