<?php

use yii\helpers\Url;

$this->title = "Ganadores";
$this->params['classBody'] = "site-navbar-small dashboard bkgd-concursante";
?>

 <div class="page-content manager-image">
<?php
$index = 0;
      foreach($ganadores as $imagen){
          $index++;
    ?>
       <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card outline-dashed">
          <div class="card-bg" style="background-image: url(<?=Url::base()?>/<?=$imagen->txt_url?>);"></div>
        </div>
        <div>
            <?=$index?>.- Ganador 
        </div>
      </div>
    <?php
      }
    ?>

</div>    