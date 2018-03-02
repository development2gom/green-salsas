<?php

use yii\helpers\Url;
use app\models\Calendario;

?>
<div class="card card-shadow">
    <figure class="card-img-top overlay-hover overlay">
        <img class="overlay-figure overlay-scale" src="<?=Url::base()?>/<?=$model->txt_url?>"
        alt="...">
        <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
        <a class="icon fa-search" href="<?=Url::base()?>/"<?=$model->txt_url?>></a>
        </figcaption>
    </figure>
    <div class="card-block">
        <h4 class="card-title"><?=Calendario::getDateComplete($model->fch_creacion)?> - <?=$model->usuario->nombreCompleto?></h4>
    </div>
</div>
