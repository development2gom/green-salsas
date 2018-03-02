<?php
namespace app\controllers;

use yii\web\Controller;
use app\components\AccessControlExtend;
use yii\web\Response;
use app\models\ResponseServices;
use yii\web\UploadedFile;
use app\modules\ModUsuarios\models\EntUsuarios;
use app\models\Files;
use app\models\EntImagenesUsuarios;
use app\models\Calendario;
use yii\helpers\Url;


class ConcursanteController extends Controller{

    /**
     * @inheritdoc
     */
     public function behaviors()
     {
        return [
             'access' => [
                 'class' => AccessControlExtend::className(),
                 'only' => ['index'],
                 'rules' => [
                     [
                         'actions' => ['index'],
                         'allow' => true,
                         'roles' => ['@'],
                     ],
                   
                 ],
             ],
           
        ];
    }

    public function actionIndex(){

        $usuario = EntUsuarios::getUsuarioLogueado();
        $imagenesUsuario = EntImagenesUsuarios::find()->where(["id_usuario"=>$usuario->id_usuario])->orderBy("fch_creacion DESC")->all();
        
        return $this->render("index", ["imagenesUsuario"=>$imagenesUsuario]);
    }

    public function actionUploadImage(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $usuario = EntUsuarios::getUsuarioLogueado();
        if(!$usuario){
            $response->message = "La sesión del usuario ha terminado. Debe iniciarla una vez más";
            return $response;
        }

        $response = new ResponseServices();

        $file = UploadedFile::getInstanceByName("image-upload");
        //$response->result = $file;

        if(!$file){
            $response->message = "Imagen nula";
            return $response;
        }

        Files::validarDirectorio("imagenes-concursantes/".$usuario->txt_token);
        $namefile = uniqid("img").".".$file->extension;
        $path = "imagenes-concursantes/".$usuario->txt_token."/".$namefile;
        $isSaved = true;//$file->saveAs($path);

        $fileM = new Files();
        list($ancho, $alto, $tipo, $atributos) =getimagesize($file->tempName);
        $fileM->rezisePicture($file->tempName, $ancho, $alto, 800, $path, $file->extension);

        if($isSaved){
            $image = new EntImagenesUsuarios();
            $image->id_usuario = $usuario->id_usuario;
            $image->txt_url = $path;
            $image->fch_creacion = Calendario::getFechaActual();
           
            if($image->save()){
                $response->message = "Imagen guardada. Mucha suerte.";
                $response->status = "success";
                $response->result['url'] = Url::base()."/".$path;
                $response->result['date'] = Calendario::getDateComplete($image->fch_creacion);
            }else{
                $response->message="Ocurrio un problema al guardar en la base de datos.";
                Files::borrarArchivo($path);
            }
            
            
        }else{
            $response->message= "La imagen no se pudo guardar.";
        }

        

        return $response;
    }

}