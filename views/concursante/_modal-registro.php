<?php

use yii\bootstrap\Modal;
    Modal::begin([
      'header' => '<h2>Bienvenido</h2>',
      'id'=>'modal-registro',
      'options'=>[
        'class'=>'modal-terminos-condiciones'
      ],
    ]);

    echo '<h4>Completa tu registro para participar</h4>
      <p>Publica diariamente 3 fotografías, demuestra porque tu poc es el más chingon y gana premios como:</p>
      <ul>
        <li>pantallas</li>
        <li>celulares</li>
        <li>tarjetas departamentales y más..</li>
      </ul>
      <p class="text-italic">Revisa los términos y condiciones.</p>
    ';

    Modal::end();
    ?>