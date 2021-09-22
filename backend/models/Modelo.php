<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $id_modelo
 * @property string $nombre_modelo
 * @property string $descripcion_modelo
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_modelo', 'descripcion_modelo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_modelo' => 'Id Modelo',
            'nombre_modelo' => 'Nombre Modelo',
            'descripcion_modelo' => 'Descripcion Modelo',
        ];
    }

    public function getArticulo(){
        return $this->hasMany(Articulo::className(), ['id_modelo' => 'id_modelo']);
    }



}
