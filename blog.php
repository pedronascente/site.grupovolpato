<?php
include 'includes/header.php';
include 'blog/posts/posts-rescentes.php';
$cat  = isset($_GET['cat']) ? $_GET['cat'] : false;
$post  = isset($_GET['post']) ? intval($_GET['post']) : false;


switch ($cat) {
  case 'alarme-monitorado':
    $sub_titulo = 'Alarme Monitorado';
    break;
  case 'portaria':
    $sub_titulo = 'Portaria';
    break;
  case 'rastreamento-veicular':
    $sub_titulo = 'Rastreamento veicular';
    break;
  default:
    $sub_titulo = '';
    break;
}

$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$URL_ATUAL = explode('&', $URL_ATUAL)[0];


?>





<style>
  .titulo-postagem {


    font-size: 18px;
    font-weight: 600;
    color: #605E5E;
  }
</style>
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Blog</h1>
    <h3 class="main-title__secondary">Soluções em segurança para uma vida melhor</h3>
  </div>
</div>
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="blog.php">Blog</a>
    </span>
    <?php if ($cat) { ?>
      <span>
        <span><a href="<?php echo $URL_ATUAL; ?>"><?php echo $sub_titulo; ?></a></span>
      </span>
    <?php  } else {
      echo 'Notícias';
    } ?>
  </div>
</div>

<section class="pb-5 margin-bottom-30">
  <div class="container">
    <div class="row ">
      <div class="col-md-9">
        <?php
        if ($cat && !$post) {
          include_once('blog/pages/' . $cat . '.php');
        } else if ($cat && $post) {
          include_once('blog/posts/index.php');
        } else {
          include_once('blog/posts/posts_destaque.php');
          foreach ($posts_destaques as $k => $destaque) { ?>
            <div class="col-md-4" style="margin-bottom: 20px;">
              <div class="card">
                <img src="public/images/blog/<?= $destaque['imagem']; ?>" class="card-img-top" alt="..." width="100%" style="border-radius:10px">
                <div class="card-body">
                  <h4 class=" card-title titulo-postagem"><?= $destaque['titulo']; ?></h4>
                  <p class="titulo-data-postagem"><?= $destaque['data_postagem']; ?></p>
                  <p class="card-text"><?= $destaque['descricao']; ?></p>
                  <a href="<?= $destaque['link']; ?>" class="">Ler mais</a>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>

      <div class="col-md-3">
        <?php include 'blog/barra-lateral.php'; ?>
      </div>
    </div>
</section>

<?php include 'includes/modal.php'; ?>
<?php include 'includes/footer.php'; ?>