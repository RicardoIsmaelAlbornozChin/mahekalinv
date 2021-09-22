<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detalle_compra".
 *
 * @property integer $id_detalle_compra
 * @property integer $id_compra
 *
 * @property Compra $idCompra
 */
class DetalleCompra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_compra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_compra'], 'integer'],
            [['id_compra'], 'exist', 'skipOnError' => true, 'targetClass' => Compra::className(), 'targetAttribute' => ['id_compra' => 'id_compra']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_compra' => 'Id Detalle Compra',
            'id_compra' => 'Id Compra',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCompra()
    {
        return $this->hasOne(Compra::className(), ['id_compra' => 'id_compra']);
    }
}
