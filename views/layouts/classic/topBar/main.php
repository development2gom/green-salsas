<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="<?= Yii::$app->language ?>">
<!-- Etiqueta head -->
<?=$this->render("//components/head")?>
<body class="animsition <?=isset($this->params['classBody'])?$this->params['classBody']:''?>">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php $this->beginBody();?>
  
  <?=$this->render("//components/classic/topbar/nav-bar")?>

  <?php #$this->render("//components/classic/topbar/menu")?>


  <?=$this->render("//components/classic/topbar/body", ["content"=>$content])?>
  

  <?=$this->render("//components/classic/topbar/footer")?>

  <?php
    Modal::begin([
      'header' => '<h2>Términos y condiciones</h2>',
      'id'=>'modal-terminos-condiciones',
      'options'=>[
        'class'=>'modal-terminos-condiciones'
      ],
    ]);

    echo '¿CÓMO PARTICIPAR?
    •	Participan mayores de edad.
    •	Del 15 de marzo al 15 de abril de 2018 podrás registrar a tu POC en el concurso #pontesalsa
    •	Tendrás que subir diariamente en un horario de 11:00 am a 11:00 pm 3 fotografías donde se aprecien los siguientes aspectos:  
    1er foto - Material bien colocado
    2da foto - Correcta ubicación 
    3ra foto - Consumidor disfrutando la salsa
    •	Se cerrará participación el día 15 de abril de 20178 a las 11:00pm
    
    ¿QUÉ PUEDO GANAR? 
    Si durante el periodo del concurso eres de los primeros 10 POCS en subir las fotos y estas cumplan con los requerimientos, ganarán uno de los 10 kits que incluyen los siguientes beneficios:
    
    Una pantalla de 40” para el Dueño del POC
    Un smartphone para el gerente del POC 
    Un monedero Walmart de $300 para mesero/fuerza de venta
    
    Para los siguientes 10 negocios que hayan cumplido al menos el 75% del programa recibirán un monedero Liverpool de $2,000.00
    
    *Indispensable presentar identificación oficial vigente para hacer entrega del incentivo. Los kits se entregarán al administrador del POC 
    
    RESTRICCIONES
    •	El formato de la fotografía debe ser en formato JPG, PNG o GIF.
    •	Se descartarán fotografías que en su contenido muestren desnudos, actos violentos, uso o consumo de sustancias nocivas para la salud (drogas, alcohol) o armas. 
    •	No participan menores de edad.
    •	El premio no podrá ser canjeado por dinero en efectivo.
    
    RESPONSABLE DEL CONCURSO
    El organizador responsable y encargado de la promoción es PUBLICIDAD Y SOLUCIONES GREEN S.A DE C.V PSG061123PQ9 con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54050, Tlalnepantla de Baz Estado de México.';

    Modal::end();
    ?>
  <?php $this->endBody();?>
 
  <?=isset($this->params['modal'])?$this->params['modal']:''?>

  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
<?php $this->endPage() ?>
