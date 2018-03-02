<?php

namespace app\models;

use Yii;
use app\modules\ModUsuarios\models\EntUsuarios;

/**
 * This is the model class for table "ent_imagenes_usuarios".
 *
 * @property int $id_imagen_usuario
 * @property int $id_usuario
 * @property string $txt_url
 * @property string $fch_creacion
 * @property string $txt_puntuacion
 * @property int $num_lugar
 *
 * @property ModUsuariosEntUsuarios $usuario
 */
class EntImagenesUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_imagenes_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'fch_creacion'], 'required'],
            [['id_usuario', 'num_lugar'], 'integer'],
            [['fch_creacion'], 'safe'],
            [['txt_url', 'txt_puntuacion'], 'string', 'max' => 500],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imagen_usuario' => 'Id Imagen Usuario',
            'id_usuario' => 'Id Usuario',
            'txt_url' => 'Txt Url',
            'fch_creacion' => 'Fch Creacion',
            'txt_puntuacion' => 'Txt Puntuacion',
            'num_lugar' => 'Num Lugar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(EntUsuarios::className(), ['id_usuario' => 'id_usuario']);
    }
}
