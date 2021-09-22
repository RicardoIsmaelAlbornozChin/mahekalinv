<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "unidades".
 *
 * @property integer $id_unidades
 * @property string $nombre_unidades
 * @property string $descripcion_unidades
 */
class Unidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_unidades'], 'string', 'max' => 200],
            [['descripcion_unidades'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_unidades' => 'Id Unidades',
            'nombre_unidades' => 'Nombre Unidades',
            'descripcion_unidades' => 'Descripcion Unidades',
        ];
    }


    public function getArticulo(){
        return $this->hasMany(Articulo::className(), ['id_unidades' => 'id_unidades']);
    }
}
