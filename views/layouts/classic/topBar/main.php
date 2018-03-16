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

    echo '<h4>¿CÓMO PARTICIPAR?</h4>
      <ul>
        <li>Participan mayores de edad.</li>
        <li>
          Del 15 de marzo al 15 de abril de 2018 podrás registrar a tu POC en el concurso #pontesalsa
        </li>
        <li>
          Tendrás que subir diariamente en un horario de 11:00 am a 11:00 pm 3 fotografías donde se aprecien los siguientes aspectos:
          <ul>
            <li>1er foto - Material bien colocado</li>
            <li>2da foto - Correcta ubicación</li>
            <li>3ra foto - Consumidor disfrutando la salsa</li>
          </ul>
        </li>
        <li>Se cerrará participación el día 15 de abril de 20178 a las 11:00pm</li>
      </ul>
      <h4>¿QUÉ PUEDO GANAR?</h4>
      <p>
        Si durante el periodo del concurso eres de los primeros 10 POCS en subir las fotos y estas cumplan con los requerimientos, ganarán uno de los 10 kits que incluyen los siguientes beneficios:
      </p>
      <ul>
        <li>Una pantalla de 40” para el Dueño del POC</li>
        <li>Un smartphone para el gerente del POC</li>
        <li>Un monedero Walmart de $300 para mesero/fuerza de venta</li>
      </ul>
      <p>
        Para los siguientes 10 negocios que hayan cumplido al menos el 75% del programa recibirán un monedero Liverpool de $2,000.00
      </p>
      <p>
        *Indispensable presentar identificación oficial vigente para hacer entrega del incentivo. Los kits se entregarán al administrador del POC 
      </p>
      <h4>RESTRICCIONES</h4>
      <ul>
        <li>El formato de la fotografía debe ser en formato JPG, PNG o GIF.</li>
        <li>Se descartarán fotografías que en su contenido muestren desnudos, actos violentos, uso o consumo de sustancias nocivas para la salud (drogas, alcohol) o armas. </li>
        <li>No participan menores de edad.</li>
        <li>El premio no podrá ser canjeado por dinero en efectivo.</li>
      </ul>
      <h4>RESPONSABLE DEL CONCURSO</h4>
      <p>El organizador responsable y encargado de la promoción es PUBLICIDAD Y SOLUCIONES GREEN S.A DE C.V PSG061123PQ9 con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54050, Tlalnepantla de Baz Estado de México.</p>
      <h4>AUTORIZACIÓN</h4>
      <p>Los participantes que resulten ganadores del concurso, autorizan  a PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V. o cualquier otra empresa que ésta determine, a difundir en los medios que estime conveniente, su nombre y apellido completo, país y ciudad de origen, fotografías y uso de imagen o retrato, videos y en general todos aquellos datos que pudieran requerirse con motivo de la difusión del concurso, renunciando expresa e irrevocablemente, desde la aceptación de las bases, a cualquier tipo de compensación económica, remuneración, regalía o retribución alguna por dicho uso.</p>
      <p>Los participantes ganadores cuyos datos, imagen, retrato, video y/o alguno de los señalados anteriormente, entiende y acepta que el uso de dicha imagen no se lleva acabo con fines de lucro directo ni indirecto, sino para dar claridad y transparencia sobre los resultados del presente concurso.</p>
      <h4>PRIVACIDAD Y PROTECCIÓN DE DATOS PERSONALES</h4>
      <p>PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V. con domicilio en Santa Brígida 19, Jardines de Santa Mónica, C.P. 54055, Tlalnepantla de Baz Estado de México, es el responsable del tratamiento de sus datos personales, y se han adoptado los niveles de seguridad de protección de datos personales legalmente requeridos y procuran instalar aquellos otros medios y medidas técnicas adicionales a su alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los mismos. Usted podrá consultar el Aviso de Privacidad completo publicado en la página de internet, www.participagana.com.mx Sus datos podrán ser utilizados para fines del concurso.</p>
      <p class="text-italic text-grey">Las presentes bases de participación están sujetas a cambio sin previo aviso. Para cualquier duda acerca del concurso comunícate al 01 800 467 1897 o escríbenos al correo electrónico promociones@participagana.com.mx</p>
    ';

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
