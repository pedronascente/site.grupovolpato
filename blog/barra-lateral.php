<!--[ categoria ]-->

<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item titulo-blog">
    Categorias
  </a>
  <a href="?cat=alarme-monitorado" class="list-group-item list-group-item-action">Alarme Monitorado</a>
  <a href="?cat=portaria" class="list-group-item list-group-item-action">Portaria Humana</a>
  <a href="?cat=portaria" class="list-group-item list-group-item-action">Portaria Virtual</a>
  <a href="?cat=rastreamento-veicular" class="list-group-item list-group-item-action">Rastreramento Veíclular</a>
</div>

<!--[ post rescentes ]-->

<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item  titulo-blog ">
    Posts Destaques
  </a>
  <?php foreach ($posts_rescentes as $k => $postrescente) {  ?>
    <a href="<?= $postrescente['link']; ?>" class="list-group-item list-group-item-action">
      <div class="panel-body">
        <div class="media">
          <div class="media-left">
            <img class="media-object" id="thumb-posts-rescentes" src="public/images/blog/<?= $postrescente['imagem']; ?>" alt="<?= $postrescente['titulo']; ?>">
          </div>
          <div class="media-body ">
            <?= $postrescente['titulo']; ?>
          </div>
        </div>
      </div>
    </a>
  <?php  }  ?>
</div>

<!--[ formulario blog ]-->

<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item titulo-blog">
    Peça seu orçamento
  </a>
  <div class="" method="post">
    <div role="main" id="grupovolpato-form-blog-4f85dd3dd4930d861d0f"></div>
    <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
    <script type="text/javascript">
      new RDStationForms('grupovolpato-form-blog-4f85dd3dd4930d861d0f', 'null').createForm();
    </script>
  </div>
</div>