<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rubro".
 *
 * @property int $id_rubro
 * @property string $rubro
 *
 * @property Bajas[] $bajas
 */
class Rubro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rubro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rubro'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rubro' => 'Id Rubro',
            'rubro' => 'Rubro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBajas()
    {
        return $this->hasMany(Bajas::className(), ['id_rubro' => 'id_rubro']);
    }
}
