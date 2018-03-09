<?php

use yii\helpers\Url;


$this->params['classBody'] = "site-navbar-small dashboard bkgd-concursante";
?>

 <div class="page-content">

   <div class="titler">
    <h2>Ganadores</h2>
   </div>

   <div class="row">
    <?php
    $index = 0;
          foreach($ganadores as $imagen){
              $index++;
        ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card outline-double">
              <div class="card-bg" style="background-image: url(<?=Url::base()?>/<?=$imagen->txt_url?>);"></div>
            </div>
            <p class="card-text">
                <?=$index?>.- Ganador 
            </p>
          </div>
        <?php
          }
        ?>
  </div>
</div>    