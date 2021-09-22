<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ArticulosProveedores;

/**
 * ArticulosProveedoresSearch represents the model behind the search form about `backend\models\ArticulosProveedores`.
 */
class ArticulosProveedoresSearch extends ArticulosProveedores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_articulosproveedores', 'id_proveedor', 'id_articulo'], 'integer'],
            [['precio_venta'], 'number'],
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
        $query = ArticulosProveedores::find();

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
            'id_articulosproveedores' => $this->id_articulosproveedores,
            'precio_venta' => $this->precio_venta,
            'id_proveedor' => $this->id_proveedor,
            'id_articulo' => $this->id_articulo,
        ]);

        return $dataProvider;
    }
}
