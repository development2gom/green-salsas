<?php

use yii\helpers\Url;
use app\models\Calendario;
$usuario = $model->usuario;
?>


<div class="card outline-dashed">
    <div class="card-bg" id="contenedor-imagen-<?=$model->id_imagen_usuario?>" style="background-image: url(<?=Url::base()?>/<?=$model->txt_url?>);">
       
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
        <div class="card-block" >
              <h4 class="card-title" style="color:white"><?=$usuario->nombreCompleto?> <small><?=$usuario->txt_email?></small> </h4>
        </div>
    </div>

    
</div>
