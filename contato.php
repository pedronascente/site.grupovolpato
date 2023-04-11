<?php include_once __DIR__ . '/includes/header.php'; ?>  
<div class="main-title">
    <div class="container">
        <h1 class="main-title__primary">Contato</h1>
        <h3 class="main-title__secondary">Preencha o formulário que em breve entraremos em contato.</h3>
    </div>
</div>
<div class="breadcrumbs margin-bottom-0">
    <div class="container">
        <span>
            <a class="home" href="index.php">Home</a>
        </span>
        <span>
            <span>Contato</span>
        </span>
    </div>
</div>
<div class="container">
    <div class="row margin-bottom-30 margin-top-60">
        <div class="col-sm-4">
            <div class="widget_black-studio-tinymce">
                <h3 class="widget-title  margin-top-0">
                    <span class="widget-title__inline">GRUPO VOLPATO</span>
                </h3>
                <p>
                    <strong>Matriz</strong><br>
                    Av. Amazonas, Nº 205<br>
                    São Geraldo - Porto Alegre/RS
                </p>
                <p>
                    <strong>Fone:</strong> 3004-5554<br>
                    <strong>E-mail:</strong> volpato@grupovolpato.com
                </p>
            </div>
        </div>
        <div class="col-sm-8">
            <h3 class="widget-title margin-top-0">
                ENVIE SUA MENSAGEM
            </h3>
                <?php  
                    include_once('includes/getFormularios.php');
                    echo get_formulario("contato");
                ?>

        </div>
    </div>
</div>

<?php include_once __DIR__ . '/includes/modal.php'; ?>  
<?php include_once __DIR__ . '/includes/footer.php'; ?>  