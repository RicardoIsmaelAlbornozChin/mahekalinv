<?php

namespace backend\models;
use backend\models\DetalleCompra;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property integer $id_compra
 * @property string $numero_factura
 * @property string $fecha_compra
 * @property string $subtotal
 * @property string $iva
 * @property string $total_factura
 * @property integer $id_proveedor
 *
 * @property Proveedor $idProveedor
 * @property DetalleCompra[] $detalleCompras
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_compra'], 'safe'],
            [['id_proveedor'], 'integer'],
            [['numero_factura', 'subtotal', 'iva', 'total_factura'], 'string', 'max' => 200],
            [['id_proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['id_proveedor' => 'id_proveedor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_compra' => 'Id Compra',
            'numero_factura' => 'Numero Factura',
            'fecha_compra' => 'Fecha Compra',
            'subtotal' => 'Subtotal',
            'iva' => 'Iva',
            'total_factura' => 'Total Factura',
            'id_proveedor' => 'Id Proveedor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProveedor()
    {
        return $this->hasOne(Proveedor::className(), ['id_proveedor' => 'id_proveedor']);
    }

    public function getTipoProveedor(){ 

        $tipo=Proveedor::find()->all(); 
        $tipoLista=ArrayHelper::map($tipo, 'id_proveedor' , 'razon_social');
        return $tipoLista;
    //ir a articulo\_form.php
       }

       


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['id_compra' => 'id_compra']);
    }





    
}
