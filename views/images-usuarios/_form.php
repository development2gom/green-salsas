<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntImagenesUsuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-imagenes-usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <?= $form->field($model, 'txt_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fch_creacion')->textInput() ?>

    <?= $form->field($model, 'txt_puntuacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_lugar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
