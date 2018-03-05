<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="<?= Yii::$app->language ?>">
<!-- Etiqueta head -->
<?=$this->render("//components/head")?>
<body class="animsition <?=isset($this->params['classBody'])?$this->params['classBody']:''?>">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php $this->beginBody();?>
  
  <?=$this->render("//components/classic/topbar/nav-bar")?>

  <?php #$this->render("//components/classic/topbar/menu")?>


  <?=$this->render("//components/classic/topbar/body", ["content"=>$content])?>
  

  <?=$this->render("//components/classic/topbar/footer")?>

  <?php
    Modal::begin([
      'header' => '<h2>Términos y condiciones</h2>',
      'id'=>'modal-terminos-condiciones'
    ]);

    echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla tincidunt eros non posuere. Maecenas vel suscipit risus. Fusce fermentum congue fermentum. Vestibulum eget magna nec metus elementum sollicitudin sit amet quis enim. Pellentesque eu lacinia leo. Aenean blandit pretium porttitor. Nam commodo augue non augue ornare, at efficitur neque hendrerit. Integer tincidunt aliquet tortor sit amet gravida. In odio erat, dignissim vel maximus at, tincidunt non libero. Ut viverra ante lacus, in rhoncus dui bibendum et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed consequat at ligula in pretium. Integer mollis sollicitudin nulla a aliquam. Morbi varius, nibh eu gravida lacinia, leo nisl ultrices nunc, vel tristique ex tortor ut magna. Phasellus eu nisi quis libero venenatis faucibus nec at odio. Integer in nisi ac risus lobortis tincidunt.

    Duis convallis vulputate auctor. Nunc et neque eget ipsum vulputate vehicula et sed lacus. Vestibulum pulvinar ligula et vulputate finibus. Cras id odio commodo ligula vestibulum elementum in eget elit. Vivamus tempor posuere eleifend. Nullam eget ipsum massa. Quisque eu scelerisque massa, in vulputate mi. Praesent est metus, ornare in diam in, volutpat imperdiet eros. Nunc in eros et arcu euismod vulputate. Vestibulum vel condimentum nulla. Sed eget semper neque. Donec rutrum pharetra sagittis. Morbi tristique vulputate aliquam. Nam quis eros sapien. Suspendisse potenti.
    
    Quisque nulla magna, feugiat et ultricies ut, condimentum non dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam auctor purus vitae felis ornare, nec accumsan est posuere. Fusce feugiat vel tellus eget viverra. Morbi venenatis vel nunc ut volutpat. Suspendisse volutpat enim sed tincidunt iaculis. Ut porttitor lacus at dolor vehicula consectetur. Pellentesque vitae diam felis. Nam a nisi sem.
    
    In sed lorem elementum, dignissim sem facilisis, vestibulum augue. Morbi eros enim, eleifend vitae bibendum id, aliquet ac dui. Praesent vestibulum, diam ut fermentum tincidunt, tortor erat vestibulum nisi, non gravida mauris velit ac velit. Vivamus feugiat pretium imperdiet. In elementum laoreet felis id rhoncus. Phasellus pharetra pulvinar tortor nec finibus. Pellentesque nec erat turpis.
    
    Phasellus eleifend hendrerit tristique. Phasellus rhoncus dictum metus et sagittis. Aliquam quis augue ac nulla maximus varius eu in felis. Pellentesque hendrerit, velit eu vestibulum gravida, odio elit bibendum sapien, a tempor nisl sapien et ipsum. Ut sit amet euismod diam, sit amet tempor neque. Nam vel elit non urna sagittis aliquet. In accumsan eget lectus vitae convallis.';

    Modal::end();
    ?>
  <?php $this->endBody();?>
 

  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
<?php $this->endPage() ?>
