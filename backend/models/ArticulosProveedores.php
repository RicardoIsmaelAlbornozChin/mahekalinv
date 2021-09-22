<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "articulos_proveedores".
 *
 * @property integer $id_articulosproveedores
 * @property string $precio_venta
 * @property integer $id_proveedor
 * @property integer $id_articulo
 *
 * @property Proveedor $idProveedor
 * @property Articulo $idArticulo
 */
class ArticulosProveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articulos_proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['precio_venta'], 'number'],
            [['id_proveedor', 'id_articulo'], 'integer'],
            [['id_proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['id_proveedor' => 'id_proveedor']],
            [['id_articulo'], 'exist', 'skipOnError' => true, 'targetClass' => Articulo::className(), 'targetAttribute' => ['id_articulo' => 'id_articulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_articulosproveedores' => 'Id Articulosproveedores',
            'precio_venta' => 'Precio Venta',
            'id_proveedor' => 'Id Proveedor',
            'id_articulo' => 'Id Articulo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProveedor()
    {
        return $this->hasOne(Proveedor::className(), ['id_proveedor' => 'id_proveedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdArticulo()
    {
        return $this->hasOne(Articulo::className(), ['id_articulo' => 'id_articulo']);
    }
}
