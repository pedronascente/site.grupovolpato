<?php

include 'blog/posts/alarme-monitorado.php';

foreach ($posts as $k => $post) {  ?>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="media">
        <div class="media-left">
          <a href="<?= $post['link']; ?>">
            <img class="media-object" src="public/images/blog/<?= $post['imagem']; ?>" alt="<?= $post['titulo']; ?>" width="320px0px">
          </a>
        </div>
        <div class="media-body ">
          <a href="<?= $post['link']; ?>">
            <h4 class="media-heading titulo-postagem"><?= $post['titulo']; ?></h4>
          </a>
          <p><?= $post['descricao']; ?></p>
          <span class="titulo-data-postagem"><?= $post['data_postagem']; ?></span>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>