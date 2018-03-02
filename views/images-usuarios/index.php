<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntImagenesUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ent Imagenes Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-imagenes-usuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Imagenes Usuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imagen_usuario',
            'id_usuario',
            'txt_url:url',
            'fch_creacion',
            'txt_puntuacion',
            //'num_lugar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
