<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Modelo;

/**
 * ModelosSearch represents the model behind the search form about `backend\models\Modelo`.
 */
class ModelosSearch extends Modelo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_modelo'], 'integer'],
            [['nombre_modelo', 'descripcion_modelo'], 'safe'],
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
        $query = Modelo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_modelo' => $this->id_modelo,
        ]);

        $query->andFilterWhere(['like', 'nombre_modelo', $this->nombre_modelo])
            ->andFilterWhere(['like', 'descripcion_modelo', $this->descripcion_modelo]);

        return $dataProvider;
    }
}
