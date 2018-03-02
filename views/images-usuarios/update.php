<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntImagenesUsuarios */

$this->title = 'Update Ent Imagenes Usuarios: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ent Imagenes Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imagen_usuario, 'url' => ['view', 'id' => $model->id_imagen_usuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-imagenes-usuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
