<?php

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;
use app\models\Calendario;
use kop\y2sp\ScrollPager;
use yii\widgets\ListView;
$this->title = "Fotografías";
$this->params['classBody'] = "site-navbar-small dashboard bkgd-concursante";


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
  '@web/webAssets/js/administrador/index.js',
  ['depends' => [AppAsset::className()]]
);


?>
<div class="row">
  <div class="col-md-12">
    <a class="btn btn-success float-right" target="_blank" href="<?=Url::base()?>/administrador/descargar-info">
      Descargar información
    </a>
  </div>
</div>  
<div class="page-content manager-image">
  
    <?php
        echo ListView::widget([
            'options'=>[
              'class'=>'row'
            ],
            'dataProvider' => $dataProvider,
            'itemView' => '_item_imagen_concursante',
            'itemOptions'=>[
              //'tag'=>"li",
              'class'=>"col-sm-12 col-md-6 col-lg-4 overlay-hover overlay"
            ],
            'layout'=>'{items}</ul>{pager}{summary}',
            'pager'=>[
              'linkOptions' => [
                  'class' => 'page-link'
              ],
              'pageCssClass'=>'page-item',
              'prevPageCssClass' => 'page-item',
              'nextPageCssClass' => 'page-item',
              'firstPageCssClass' => 'page-item',
              'lastPageCssClass' => 'page-item',
              'maxButtonCount' => '5',
          ]
            
            
        ]);?>
  </div>      
