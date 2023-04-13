<!-- FOOTER -->
<footer class="footer">
	<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up fa-3x" aria-hidden="true"></i></a>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<p><img alt="logo-footer" src="public/images/logo-2.png" class="logo"></p>
					<p>Promovendo soluções em segurança para uma vida melhor.</p>
					<p><a target="_self" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Peça seu orçamento</a></p>
				</div>
				<div class="col-xs-12 col-md-2">
					<div class="widget_nav_menu">
						<h6 class="footer-top__headings">NAVEGAÇÃO</h6>
						<ul>
							<!--
							<li><a href="https://www.grupovolpato.com">Home</a></li>
							-->
							<li><a href="/a-volpato">A Volpato</a></li>
							<li><a href="https://www.volpato.blog.br">Blog</a></li>
							<li><a href="https://grupovolpato.pandape.com.br/">Trabalhe Conosco</a></li>
							<li><a href="/contato">Contato</a></li>
							<li><a href="/politica-de-privacidade">Politica de Privacidade</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-2">
					<div class="widget_nav_menu">
						<h6 class="footer-top__headings">SOLUÇÕES</h6>
						<ul>
							<li><a href="https://www.volpatorastreamento.com.br">Rastreamento Veicular</a></li>
							<li><a href="seguranca-eletronica">Alarme Monitorado</a></li>
							<li><a href="https://www.portariavolpato.com.br/presencial">Portaria Humana</a></li>
							<li><a href="https://www.portariavolpato.com.br/virtual">Portaria Virtual</a></li>
							<!-- 
								<li><a href="/projetos-integrados">Projetos Integrados</a></li>
							-->
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<h6 class="footer-top__headings">CONTATO</h6>
					<p>
						<strong>Matriz</strong><br>
						Av. Amazonas, Nº 205<br>
						São Geraldo - Porto Alegre/RS
					</p>
					<p>
						<strong>Fone:</strong> 3004-5554<br>
						<strong>E-mail:</strong> volpato@grupovolpato.com
					</p>
					<p>
						<a target="_blank" href="https://www.facebook.com/Volpato.se/" class="icon-container icon-container--square">
							<span class="fa fa-facebook"></span>
						</a>
						<a target="_blank" href="https://twitter.com/Volpato_se" class="icon-container icon-container--square">
							<span class="fa fa-twitter"></span>
						</a>
						<a href="https://www.instagram.com/volpato/" class="icon-container icon-container--square">
							<span class="fa fa-instagram"></span>
						</a>

						<a target="_blank" href="https://www.youtube.com/channel/UCoiVZVUW34jl6qyXLQxVYYg" class="icon-container icon-container--square">
							<span class="fa fa-youtube-play"></span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom__left">
				(C) <?php echo date("Y") ?> Todos os direitos reservados - Proibida a reprodução total ou parcial sem autorização prévia do autor.
			</div>
		</div>
	</div>
</footer>
</div><!-- /.boxed-container -->

<script src="public/js/jquery3.js" type="text/javascript"></script>
<script src="public/js/modernizr.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="public/owlcarousel/owl.carousel.js"></script>
<script src="public/js/bootstrap3/bootstrap.min.js" type="text/javascript"></script>
<script src="public/js/to-top.js"></script>
<script src="public/js/valida-telefone.js"></script>
<script type="text/javascript" src="public/js/jquery.mask.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.phone_with_ddd').mask('(00) 00000-0000');
		$('.ddd').mask('00');
	});
</script>

<script>
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			loop: true,
			margin: 0,
			navSpeed: 500,
			nav: true,
			items: 1,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
		});
	})
</script>

<script>
	// Este evendo é acionado após o carregamento da página
	$(window).on("load", function(e) {
		//Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
		jQuery("#loader").fadeOut("slow");
	});
</script>

</body>

</html>