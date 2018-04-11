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


    public function actionDescargarInfo(){
        
        $imagenes = EntImagenesUsuarios::find()->orderBy("fch_creacion")->all();
		$arrayCsv = [ ];
		$i = 0;
		foreach ( $imagenes as $data ) {
            $usuario = $data->usuario;
			$arrayCsv [$i] ['nombreCompleto'] = $usuario->nombreCompleto;
			$arrayCsv [$i] ['txtEmail'] = $usuario->txt_email;
			$arrayCsv [$i] ['fchRegistro'] = $usuario->fch_creacion;
			$arrayCsv [$i] ['fchImagenUpload'] = $data->fch_creacion;
			
			$i++;
		}

        $this->downloadSendHeaders ( 'reporte.csv' );
		Yii::$app->response->content = $this->array2Csv ( $arrayCsv );
    }

    private function array2Csv($array) {
		if (count ( $array ) == 0) {
			return null;
		}
		ob_start();
		$df = fopen ( "php://output", "w" );
		fputcsv ( $df, [
				'Nombre completo',
				'Email',
				'Fecha registro',
				'Fecha imagen cargada',
		]
		 );
		foreach ( $array as $row ) {
			fputcsv ( $df, $row );
		}
		fclose ( $df );
		return ob_get_clean();
	}
	private function downloadSendHeaders($filename) {
		// disable caching
		$now = gmdate ( "D, d M Y H:i:s" );
		// header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
		header ( "Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate" );
		header ( "Last-Modified: {$now} GMT" );
		// force download
		header ( "Content-Type: application/force-download" );
		header ( "Content-Type: application/octet-stream" );
		// comentario sin sentido
		header ( "Content-Type: application/download" );
		// disposition / encoding on response body
		header ( "Content-Disposition: attachment;filename={$filename}" );
		header ( "Content-Transfer-Encoding: binary" );
	}
}
