<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item list-group-item-action active titulo-categoria">
    CATEGORIAS
  </a>
  <a href="?cat=alarme-monitorado" class="list-group-item list-group-item-action">Alarme Monitorado</a>
  <a href="?cat=portaria" class="list-group-item list-group-item-action">Portaria Humana</a>
  <a href="?cat=portaria" class="list-group-item list-group-item-action">Portaria Virtual</a>
  <a href="?cat=rastreamento-veicular" class="list-group-item list-group-item-action">Rastreramento Veíclular</a>
</div>

<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item list-group-item-action active titulo-categoria">
    POSTS RECENTES
  </a>

  <?php foreach ($posts_rescentes as $k => $postrescente) {  ?>

    <a href="<?= $postrescente['link']; ?>" class="list-group-item list-group-item-action">

      <div class="panel-body">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="public/images/blog/<?= $postrescente['imagem']; ?>" alt="<?= $postrescente['titulo']; ?>" width="70px">
          </div>
          <div class="media-body ">
            <p class="media-heading "><?= $postrescente['titulo']; ?></p>
          </div>
        </div>
      </div>

    </a>

  <?php  }  ?>

</div>


<div class="list-group">
  <a href="javascript:void(0)" class="list-group-item list-group-item-action active titulo-categoria">
    PEÇA SEU ORÇAMENTO
  </a>


  <div class="list-group-item list-group-item-action" method="post" style="padding: 0;">
    <div role="main" id="grupovolpato-form-blog-4f85dd3dd4930d861d0f"></div>
    <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
    <script type="text/javascript">
      new RDStationForms('grupovolpato-form-blog-4f85dd3dd4930d861d0f', 'null').createForm();
    </script>
  </div>

</div>