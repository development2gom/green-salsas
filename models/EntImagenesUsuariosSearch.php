<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntImagenesUsuarios;

/**
 * EntImagenesUsuariosSearch represents the model behind the search form of `app\models\EntImagenesUsuarios`.
 */
class EntImagenesUsuariosSearch extends EntImagenesUsuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imagen_usuario', 'id_usuario', 'num_lugar'], 'integer'],
            [['txt_url', 'fch_creacion', 'txt_puntuacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = EntImagenesUsuarios::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 30,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_imagen_usuario' => $this->id_imagen_usuario,
            'id_usuario' => $this->id_usuario,
            'fch_creacion' => $this->fch_creacion,
            'num_lugar' => $this->num_lugar,
        ]);

        $query->andFilterWhere(['like', 'txt_url', $this->txt_url])
            ->andFilterWhere(['like', 'txt_puntuacion', $this->txt_puntuacion]);

        return $dataProvider;
    }
}
