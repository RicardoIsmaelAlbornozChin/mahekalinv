<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bajas;

/**
 * BajasSearch represents the model behind the search form of `backend\models\Bajas`.
 */
class BajasSearch extends Bajas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_baja', 'id_departamento', 'id_rubro', 'cantidad', 'id_destino'], 'integer'],
            [['articulo', 'fecha', 'descripcion', 'ubicacion', 'razon_baja'], 'safe'],
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
        $query = Bajas::find();

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
            'id_baja' => $this->id_baja,
            'id_departamento' => $this->id_departamento,
            'id_rubro' => $this->id_rubro,
            'fecha' => $this->fecha,
            'cantidad' => $this->cantidad,
            'id_destino' => $this->id_destino,
        ]);

        $query->andFilterWhere(['like', 'articulo', $this->articulo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion])
            ->andFilterWhere(['like', 'razon_baja', $this->razon_baja]);

        return $dataProvider;
    }
}
