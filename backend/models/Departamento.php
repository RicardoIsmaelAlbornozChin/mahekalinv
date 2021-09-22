<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $id_departamento
 * @property string $departamento
 * @property string $descripcion_departamento
 * @property string $extension
 * @property string $jefe_departamento
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departamento', 'descripcion_departamento'], 'string', 'max' => 255],
            [['extension'], 'string', 'max' => 45],
            [['jefe_departamento'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_departamento' => 'Id Departamento',
            'departamento' => 'Departamento',
            'descripcion_departamento' => 'Descripcion Departamento',
            'extension' => 'Extension',
            'jefe_departamento' => 'Jefe Departamento',
        ];
    }

    public function getArticulo(){
        return $this->hasMany(Articulo::className(), ['id_departamento' => 'id_departamento']);
    }



}
