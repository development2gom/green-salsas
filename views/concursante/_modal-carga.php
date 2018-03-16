<?php

use yii\bootstrap\Modal;
    Modal::begin([
      'header' => '<h2>Instrucciones</h2>',
      'id'=>'modal-carga',
      'options'=>[
        'class'=>'modal-terminos-condiciones'
      ],
    ]);

    echo '<h4>Publica diariamente tus 3 fotografías:</h4>
      <ul>
        <li>Foto de producto en una mesa del restaurante.</li>
        <li>Foto de montaje de la barra con el producto presente.</li>
        <li>Foto de los comensales degustando el producto.</li>
      </ul>
      <p class="text-italic">Únicamente participan las fotografías publicadas dentro del horario de 11:00 am a 11:00 pm Las mejores fotos que se publiquen primero tienen más oportunidades de ganar.</p>
    ';

    Modal::end();
    ?>