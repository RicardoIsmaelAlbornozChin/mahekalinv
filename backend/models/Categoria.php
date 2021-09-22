<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $id_categoria
 * @property string $nombre_categoria
 * @property string $descripcion_categoria
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_categoria'], 'string', 'max' => 200],
            [['descripcion_categoria'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_categoria' => 'Id Categoria',
            'nombre_categoria' => 'Nombre Categoria',
            'descripcion_categoria' => 'Descripcion Categoria',
        ];
    }


    public function getArticulo(){
        return $this->hasMany(Articulo::className(), ['id_categoria' => 'id_categoria']);
    }

   

}
