<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntImagenesUsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-imagenes-usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imagen_usuario') ?>

    <?= $form->field($model, 'id_usuario') ?>

    <?= $form->field($model, 'txt_url') ?>

    <?= $form->field($model, 'fch_creacion') ?>

    <?= $form->field($model, 'txt_puntuacion') ?>

    <?php // echo $form->field($model, 'num_lugar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
