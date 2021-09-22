<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "destino_final".
 *
 * @property int $id_destino
 * @property string $tipo_destino
 *
 * @property Bajas[] $bajas
 */
class DestinoFinal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'destino_final';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_destino'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_destino' => 'Id Destino',
            'tipo_destino' => 'Tipo Destino',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBajas()
    {
        return $this->hasMany(Bajas::className(), ['id_destino' => 'id_destino']);
    }
}
