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
      <div class="col-md-8">
        <?php
        if ($cat && !$post) {
          include_once('blog/pages/' . $cat . '.php');
        } else if ($cat && $post) {
          include_once('blog/posts/index.php');
        } else {
          include_once('blog/posts/posts_destaque.php');
          foreach ($posts_destaques as $k => $destaque) { ?>
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">
                    <a href="<?= $destaque['link']; ?>">
                      <img class="media-object" src="public/images/blog/<?= $destaque['imagem']; ?>" alt="<?= $destaque['titulo']; ?>" width="320px0px">
                    </a>
                  </div>
                  <div class="media-body ">
                    <h4 class="media-heading titulo-postagem"><?= $destaque['titulo']; ?></h4>
                    <p><?= $destaque['descricao']; ?></p>
                    <span class="titulo-data-postagem"><?= $destaque['data_postagem']; ?></span>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <div class="col-md-4">
        <?php include 'blog/barra-lateral.php'; ?>
      </div>
    </div>
</section>

<?php include 'includes/modal.php'; ?>
<?php include 'includes/footer.php'; ?>