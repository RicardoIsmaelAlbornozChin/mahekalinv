<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Resguardos;

/**
 * ResguardosSearch represents the model behind the search form about `backend\models\Resguardos`.
 */
class ResguardosSearch extends Resguardos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_resguardo', 'id_departamento', 'id_articulo'], 'integer'],
            [['fecha_resguardo'], 'safe'],
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
        $query = Resguardos::find();

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
            'id_resguardo' => $this->id_resguardo,
            'fecha_resguardo' => $this->fecha_resguardo,
            'id_departamento' => $this->id_departamento,
            'id_articulo' => $this->id_articulo,
        ]);

        return $dataProvider;
    }
}
