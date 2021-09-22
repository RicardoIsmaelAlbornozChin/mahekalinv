<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Unidades;

/**
 * UnidadesSearch represents the model behind the search form about `backend\models\Unidades`.
 */
class UnidadesSearch extends Unidades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unidades'], 'integer'],
            [['nombre_unidades', 'descripcion_unidades'], 'safe'],
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
        $query = Unidades::find();

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
            'id_unidades' => $this->id_unidades,
        ]);

        $query->andFilterWhere(['like', 'nombre_unidades', $this->nombre_unidades])
            ->andFilterWhere(['like', 'descripcion_unidades', $this->descripcion_unidades]);

        return $dataProvider;
    }
}
