<?php

use yii\bootstrap\Modal;
    Modal::begin([
      'header' => '<h2>Bienvenido</h2>',
      'id'=>'modal-registro',
      'options'=>[
        'class'=>'modal-terminos-condiciones'
      ],
    ]);

    echo 'Completa tu registro para participar
    Publica diariamente 3 fotografías, demuestra porque tu poc más chingon y gana premios
    Como: pantallas, celulares, tarjetas departamentales y más..
    Revisa los términos y condiciones.';

    Modal::end();
    ?>