<?php

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;
use app\models\Calendario;
// $this->title = "Dashboard";
$this->params['classBody'] = "site-navbar-small dashboard bkgd-concursante";

$this->registerCssFile(
  '@web/webAssets/templates/classic/global/vendor/dropify/dropify.css',
  ['depends' => [AppAsset::className()]]
); 

$this->registerCssFile(
    '@web/webAssets/templates/classic/global/vendor/magnific-popup/magnific-popup.css',
    ['depends' => [AppAsset::className()]]
  );

 
  
  $this->registerCssFile(
    '@web/webAssets/templates/classic/topbar/assets/examples/css/pages/gallery.css',
    ['depends' => [AppAsset::className()]]
  );  
  
$this->registerJsFile(
    '@web/webAssets/templates/classic/global/vendor/magnific-popup/jquery.magnific-popup.min.js',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
    '@web/webAssets/templates/classic/global/vendor/dropify/dropify.min.js',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
    '@web/webAssets/templates/classic/global/js/Plugin/dropify.js',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
  '@web/webAssets/js/concursante/index.js',
  ['depends' => [AppAsset::className()]]
);

?>

 <div class="page-content manager-image">

  <!-- <div class="titler-fin-concurso">
    <h3>Fin del concurso</h3>
    <button class="btn btn-salsas">
      <span class='ladda-label'>+ Ver ganadores</span>
    </button>
  </div> -->

  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 li-agregar">
    
      <div class="card card-shadow card-dropify">
        <?= Html::beginForm(['concursante/upload-image'], 'post', ['enctype' => 'multipart/form-data','id' => "form-upload-image",'class' => "concursante-form-upload"]) ?>
          <?= Html::fileInput("image-upload", "", ["id"=>"input-image-upload", "data-plugin"=>"dropify", "data-max-file-size"=>"50M", "data-allowed-file-extensions"=>"png jpg jpeg gif"])?>

          <div class="card-block">
            <h4 class="card-title">
              <?=Html::submitButton("<span class='ladda-label'>Guardar imagen</span>", ["class"=>"btn btn-save btn-block ladda-button", "id"=>"btn-upload-image", "data-style"=>"zoom-in"])?>
            </h4>
          </div>
        <?=Html::endForm()?>
      </div>
    </div>

    <?php
      foreach($imagenesUsuario as $imagen){
    ?>
       <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card outline-dashed">
          <div class="card-bg" style="background-image: url(<?=Url::base()?>/<?=$imagen->txt_url?>);"></div>
        </div>
      </div>
    <?php
      }
    ?>

  </div>

</div>
<?php
$this->params['modal'] = $this->render("//concursante/_modal-carga");