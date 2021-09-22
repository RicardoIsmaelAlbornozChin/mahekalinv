<?php

namespace backend\models;
use backend\models\Articulo;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property integer $id_marca
 * @property string $nombre_marca
 * @property string $descripcion_marca
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_marca'], 'string', 'max' => 200],
            [['descripcion_marca'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_marca' => 'Id Marca',
            'nombre_marca' => 'Nombre Marca',
            'descripcion_marca' => 'Descripcion Marca',
        ];
    }




}
