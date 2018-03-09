<?php
use yii\helpers\Url;
?>

<!-- Page -->
<div class="page bg-trans">

  <div class="page-header text-center pt-120 pb-20">
    <img class="page-header-logo" src="<?=Url::base()?>/webAssets/images/logo-somos-chingones.png" title="">
  </div>

  <div class="page-content">
    <h2><?=$this->title?></h2>
    <?=$content?>
  </div>
</div>
<!-- End Page -->