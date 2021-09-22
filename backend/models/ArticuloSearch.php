<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Articulo;

/**
 * ArticuloSearch represents the model behind the search form about `backend\models\Articulo`.
 */
class ArticuloSearch extends Articulo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_articulo', 'cantidad_articulo', 'id_marca', 'id_modelo', 'id_categoria', 'id_unidades', 'id_departamento'], 'integer'],
            [['articulo', 'descripcion', 'fecha_entrada'], 'safe'],
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
        $query = Articulo::find();

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
            'id_articulo' => $this->id_articulo,
            'fecha_entrada' => $this->fecha_entrada,
            'cantidad_articulo' => $this->cantidad_articulo,
            'id_marca' => $this->id_marca,
            'id_modelo' => $this->id_modelo,
            'id_categoria' => $this->id_categoria,
            'id_unidades' => $this->id_unidades,
            'id_departamento' => $this->id_departamento,
        ]);

        $query->andFilterWhere(['like', 'articulo', $this->articulo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
