<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rubro;

/**
 * RubroSearch represents the model behind the search form of `backend\models\Rubro`.
 */
class RubroSearch extends Rubro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rubro'], 'integer'],
            [['rubro'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Rubro::find();

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
            'id_rubro' => $this->id_rubro,
        ]);

        $query->andFilterWhere(['like', 'rubro', $this->rubro]);

        return $dataProvider;
    }
}
