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

  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4">
    
      <div class="card card-shadow card-dropify">
        <?= Html::beginForm(['concursante/upload-image'], 'post', ['enctype' => 'multipart/form-data','id' => "form-upload-image",'class' => "concursante-form-upload"]) ?>
        <?= Html::fileInput("image-upload", "", ["id"=>"input-image-upload", "data-plugin"=>"dropify", "data-max-file-size"=>"50M", "data-allowed-file-extensions"=>"png jpg"])?>

        <div class="card-block">
        <h4 class="card-title">
        <?=Html::submitButton("<span class='ladda-label'>Guardar imagen</span>", ["class"=>"btn btn-save btn-block ladda-button", "id"=>"btn-upload-image", "data-style"=>"zoom-in"])?>
        </h4>
        </div>
        <?=Html::endForm()?>
        </div>
        </li>
        <?php
        foreach($imagenesUsuario as $imagen){
        ?>
        <li>
        <div class="card card-shadow">
        <figure class="card-img-top overlay-hover overlay">
        <img class="overlay-figure overlay-scale" src="<?=Url::base()?>/<?=$imagen->txt_url?>"
        alt="...">
        <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
        <a class="icon fa-search" href="<?=Url::base()?>/<?=$imagen->txt_url?>"></a>
        </figcaption>
        </figure>
        <div class="card-block">
        <h4 class="card-title"><?=Calendario::getDateComplete($imagen->fch_creacion)?></h4>
        </div>
        </div>

        <?php
        }
        ?>

    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card outline-dashed">
        <div class="card-bg" style="background-image: url(http://via.placeholder.com/350x150);"></div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="card outline-dashed">
        <div class="card-bg" style="background-image: url(http://via.placeholder.com/150x350);"></div>
      </div>
    </div>

  </div>

</div>