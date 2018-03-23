<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kop\y2sp\ScrollPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Participantes';
$this->params['classBody'] = "site-navbar-small dashboard bkgd-concursante";
?>
<div class="ent-usuarios-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Usuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => [
            'class' => ScrollPager::className(),
            'container' => '.grid-view tbody',
            'item' => 'tr',
            'paginationSelector' => '.grid-view .pagination',
            'triggerOffset'=>999999999999999999999999999,
            'negativeMargin'=>1000,
            'enabledExtensions'=>[
                ScrollPager::EXTENSION_TRIGGER,
                ScrollPager::EXTENSION_SPINNER,
                ScrollPager::EXTENSION_NONE_LEFT,
                ScrollPager::EXTENSION_PAGING, 

            ]
            //'triggerTemplate' => '<tr class="ias-trigger"><td colspan="100%" style="text-align: center"><a style="cursor: pointer">{text}</a></td></tr>',
         ],
        'columns' => [
            'nombreCompleto',
            //'txt_apellido_paterno',
            //'txt_apellido_materno',
            //'txt_auth_key',
            //'txt_password_hash',
            //'txt_password_reset_token',
            'txt_email:email',
            'fch_creacion',
            
            //'fch_actualizacion',
            //'id_status',
        ],
    ]); ?>
</div>
