<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntImagenesUsuarios */

$this->title = 'Create Ent Imagenes Usuarios';
$this->params['breadcrumbs'][] = ['label' => 'Ent Imagenes Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-imagenes-usuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
