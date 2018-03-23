<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\components\AccessControlExtend;
use app\models\EntImagenesUsuariosSearch;
use app\models\ResponseServices;
use app\models\EntImagenesUsuarios;
use app\models\EntUsuariosSearch;

class AdministradorController extends Controller
{
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
                         'roles' => ['admin'],
                     ],
                   
                 ],
             ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        ];
    }

    public function actionIndex(){

        $searchModel = new EntImagenesUsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

        return $this->render("index", ["dataProvider"=>$dataProvider]);
        
    }

    public function actionUsuarios(){
        $searchModel = new EntUsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('//usuarios/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    

    public function actionGanadora($token=null){
        $response = new ResponseServices();
        $imagen = EntImagenesUsuarios::find()->where(["id_imagen_usuario"=>$token])->one();

        if(!$imagen){
            $response->message = "No se encontro el registro para el token:".$token;
            return $response;
        }

        $imagen->b_ganadora = 1;
        if($imagen->save()){
            $response->status = "success";
            $response->message = "Cambios correctos";
            $response->result = '<a href="" data-token="'.$imagen->id_imagen_usuario.'" class="icon wb-thumb-down unmark-winner"></a>';
        };

        return $response;
    }

    public function actionDesGanadora($token=null){
        $response = new ResponseServices();
        $imagen = EntImagenesUsuarios::find()->where(["id_imagen_usuario"=>$token])->one();

        if(!$imagen){
            $response->message = "No se encontro el registro para el token:".$token;
            return $response;
        }

        $imagen->b_ganadora = 0;
        if($imagen->save()){
            $response->status = "success";
            $response->message = "Cambios correctos";
            $response->result = '<a href="" data-token="'.$imagen->id_imagen_usuario.'" class="icon wb-thumb-up mark-winner"></a>';
        };

        return $response;
    }
}
