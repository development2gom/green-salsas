<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Recuperar contraseña';
$this->params['classBody'] = "page-login-v3 layout-full bkgd-peticion-pass";
?>
<div class="panel panel-peticion-pass">

	<div class="panel-head">
      
      <h2 class="brand-text font-size-18 text-center">
        <!-- <?= Html::encode($this->title) ?>  -->
        <img src="<?=Url::base()?>/webAssets/images/logo-somos-chingones.png" alt="">
      </h2>

    </div>

	<div class="panel-body">
		<!-- <div class="brand">
			<img class="brand-img mb-40" src="<?=Url::base()?>/webAssets/images/logo.png" alt="...">
		</div> -->


		<?php 
		$form = ActiveForm::begin([
			'id' => 'login-form',
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

			<?= $form->field($model, 'username')->textInput(["class"=>"form-control", 'placeholder'=>'Nombre'])->label(false) ?>

			<?= Html::submitButton('<span class="ladda-label">Recuperar contraseña</span>', ["data-style"=>"zoom-in", 'class' => 'btn btn-salsas btn-lg ladda-button', 'name' => 'login-button']) ?>

			<div class="form-group">
				<a class="btn-salsas btn-lg" href="<?=Url::base()?>/sign-up">Necesito una cuenta</a>
			</div>

			<div class="form-group">
				<a class="link" href="<?=Url::base()?>/login">Iniciar sesión</a>
			</div>

		<?php ActiveForm::end(); ?>
		<!-- <p class="soporteTxt">¿Necesitas ayuda? escribe a: <a class="no-redirect" href="mailto:soporte@2gom.com.mx?Subject=Solicitud%de%Soporte">soporte@2gom.com.mx</a></p> -->
		
		<p class="hashtag">#PonteSalsa</span>
		
	</div>
</div>
