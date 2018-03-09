<?php

use yii\helpers\Url;
use app\models\Calendario;

?>


<div class="card outline-dashed">
    <div class="card-bg" style="background-image: url(<?=Url::base()?>/<?=$model->txt_url?>);">
       
        <?php
        if($model->b_ganadora){
        ?>
            <div class="winner">
                Ganadora
            </div>
        <?php
        }else{
        ?>
            
        <?php
        }
        ?>
        
        <div class="overlay-panel overlay-background overlay-fade overlay-icon">
            <?php
            if($model->b_ganadora){
            ?>
                <a href="" data-token="<?=$model->id_imagen_usuario?>" class="icon wb-thumb-down unmark-winner"></a>
            <?php
            }else{
            ?>
                <a href="" data-token="<?=$model->id_imagen_usuario?>" class="icon wb-thumb-up mark-winner"></a>
            <?php
            }
            ?>
        </div>

    </div>
</div>
