<?php

use yii\bootstrap\Modal;
    Modal::begin([
      'header' => '<h2>Instrucciones</h2>',
      'id'=>'modal-carga',
      'options'=>[
        'class'=>'modal-terminos-condiciones'
      ],
    ]);

    echo 'Publica diariamente tus 3 fotografías:
    Foto de producto en una mesa del restaurante.
    Foto de montaje de la barra con el producto presente.
    Foto de los comensales degustando el producto.
    
    Únicamente participan las fotografías publicadas dentro del horario de 11:00 am a 11:00 pm Las mejores fotos que se publiquen primero tienen más oportunidades de ganar.';

    Modal::end();
    ?>