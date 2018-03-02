<?php

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;
use app\models\Calendario;
use kop\y2sp\ScrollPager;
use yii\widgets\ListView;
$this->title = "Fotografías";
$this->params['classBody'] = "site-navbar-small dashboard";


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


?>

 <div class="page-content manager-image">

  <?php
      echo ListView::widget([
          'dataProvider' => $dataProvider,
          'itemView' => '_item_imagen_concursante',
          'itemOptions'=>[
            'tag'=>"li",
            'class'=>"panel-listado-row"
          ],
          'layout'=>'<ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-4 blocks-md-3">{items}</ul>{pager}{summary}',
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