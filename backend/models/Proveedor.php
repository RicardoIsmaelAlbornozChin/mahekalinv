<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property integer $id_proveedor
 * @property string $rfc
 * @property string $razon_social
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $fecha_alta
 * @property string $tipo_proveedor
 *
 * @property ArticulosProveedores[] $articulosProveedores
 * @property Compra[] $compras
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_alta'], 'safe'],
            [['rfc', 'razon_social', 'direccion', 'email', 'tipo_proveedor'], 'string', 'max' => 200],
            [['telefono'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'Id Proveedor',
            'rfc' => 'Rfc',
            'razon_social' => 'Razon Social',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'fecha_alta' => 'Fecha Alta',
            'tipo_proveedor' => 'Tipo Proveedor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticulosProveedores()
    {
        return $this->hasMany(ArticulosProveedores::className(), ['id_proveedor' => 'id_proveedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['id_proveedor' => 'id_proveedor']);
    }
}
