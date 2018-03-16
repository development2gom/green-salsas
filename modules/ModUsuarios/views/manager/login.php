<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['classBody'] = "page-login-v3 layout-full bkgd-login";

?>

<div class="panel panel-login bg-trans">
	<div class="panel-body">

		<!-- <div class="brand">
			<img class="brand-img mb-40" src="<?=Url::base()?>/webAssets/images/logo.png" alt="...">
		</div> -->

		<?php 
		$form = ActiveForm::begin([
			'id' => 'form-ajax',
			'enableAjaxValidation' => true,
			'enableClientValidation'=>true,
			'fieldConfig' => [
				"template" => "{input}{label}{error}",
				"options" => [
					"class" => "form-group",
					// "data-plugin" => "formMaterial"
				],
				// "labelOptions" => [
				// 	"class" => "floating-label"
				// ]
			]
		]); 
		?>

		<?= $form->field($model, 'username')->textInput(["class"=>"form-control", 'placeholder'=>'Nombre de usuario'])->label(false) ?>

		<?= $form->field($model, 'password')->passwordInput(["class"=>"form-control", 'placeholder'=>'Contraseña'])->label(false)?>

		<?= Html::submitButton('<span class="ladda-label">Ingresa</span>', ["data-style"=>"zoom-in", 'class' => 'btn btn-salsas btn-lg ladda-button', 'name' => 'login-button'])
		?>

		<div class="form-group">
			<a class="btn btn-salsas btn-lg" href="<?=Url::base()?>/sign-up">Crear cuenta</a>
		</div>

		<div class="form-group">
			<a class="link" href="<?=Url::base()?>/peticion-pass">Recupera tu contraseña</a>
		</div>

		<?php ActiveForm::end(); ?>

		<div class="panel-login-footer">
			<img src="<?=Url::base()?>/webAssets/images/logo-somos-chingones.png" alt="">
			<p class="hashtag">#PonteSala</p>
		</div>


		<!-- <p class="soporteTxt">¿Necesitas ayuda? escribe a: <a class="no-redirect" href="mailto:soporte@2gom.com.mx?Subject=Solicitud%de%Soporte">soporte@2gom.com.mx</a></p> -->
	</div>
</div>
<?php
$this->params['modal'] = $this->render("//concursante/_modal-registro");