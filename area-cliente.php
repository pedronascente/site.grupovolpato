<?php include_once __DIR__ . '/includes/header.php'; ?>  
<!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h1 class="main-title__primary">Área do Cliente</h1>
	</div>
	</div><!-- /.main-title -->
<!-- BREADCRUMBS -->
<div class="breadcrumbs">
	<div class="container">
		<span>
			<a class="home" href="index.php">Home</a>
		</span>
		<span>
			<span>Área do Cliente</span>
		</span>
	</div>
</div><!-- /.breadcrumbs -->

<style>
	#area-cliente a { text-decoration: none; font-weight: bold; color: #aaa}
	.thumbnail{ border: 0px !important; }
</style>
<section id="area-cliente" class="py-10">
	<div class="container">
		<div class="row margin-bottom-30">
					<div class="col-sm-6 col-md-6">
						<div class="thumbnail">
							<a target="_blank" href="https://sis.getrak.com/volpato"><img width="70px;" src="public/images/icon_rastreamento.svg" alt="..."></a>
							<div class="text-center caption">
							<h4>Rastreamento Veicular</h4>
							<p class="p-4"><a  target="_blank" href="https://sis.getrak.com/volpato" role="button">Acessar >></a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="thumbnail">
							<a target="_blank" href="/cliente-alarme"><img width="70px;" src="public/images/icon_alarme.svg" alt="..."></a>
							<div class="text-center caption">
							<h4>Alarme Monitorado</h4>
							<p class="p-4"><a  target="_blank" href="/cliente-alarme" role="button">Acessar >></a></p>
							</div>
						</div>
					</div>
			</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div> <!-- /.container-->
</section>



<?php include_once __DIR__ . '/includes/modal.php'; ?>  
<?php include_once __DIR__ . '/includes/footer.php'; ?>  