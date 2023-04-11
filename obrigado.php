<?php include_once __DIR__ . '/includes/header.php'; ?>
<style>
		#obrigado .container { display: table; height:60vh }
		#obrigado .content {display: table-cell; vertical-align: middle;}
		#obrigado h1, #obrigado h4 { color: #777 !important;}

</style>
<section id="obrigado">
  <div class="container text-center" style="color: #777">
    <div class="content">
		<h1>Obrigado pela Preferência</h1>
		<h4 class="mb-4">Em breve entraremos em contato</h4>
		<a class="pt-5 text-muted" href="index.php">Voltar para página inicial >> </a>
    </div>
</div>



<!-- Facebook Pixel Code -->
<script> 
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1032535480533848');
fbq('track', 'PageView');
fbq('track', 'Lead');

</script>
<noscript><img height="1" width="1" style="display:none" 
src="https://www.facebook.com/tr?id=1032535480533848&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</section>
<?php include_once __DIR__ . '/includes/modal.php'; ?>  
<?php include_once __DIR__ . '/includes/footer.php'; ?>

