<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\EntUsuarios */

$this->title = 'Registrarse';
$this->params['classBody'] = "page-login-v3 layout-full bkgd-registro";

$this->registerCssFile(
  '@web/webAssets/css/signUp.css',
  ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
  '@web/webAssets/js/sign-up.js',
  ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>


<div class="panel panel-registro">

    <div class="panel-head">
      
      <h2 class="brand-text font-size-18 text-center">
        <!-- <?= Html::encode($this->title) ?>  -->
        <img src="<?=Url::base()?>/webAssets/images/logo-somos-chingones.png" alt="">
      </h2>

    </div>
    <div class="panel-body">
      <?= $this->render('_form', [
        'model' => $model,
      ]) ?>
      <p class="registro-ingresar">¿Tienes una cuenta? <a href="<?=Url::base()?>/login">Ingresa</a></p>
      <p class="hashtag">#PonteSalsa</span>
    </div>
    
</div>

