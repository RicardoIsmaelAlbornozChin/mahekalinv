<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "bajas".
 *
 * @property int $id_baja
 * @property int $id_departamento
 * @property int $id_rubro
 * @property string $articulo
 * @property string $fecha
 * @property int $cantidad
 * @property string $descripcion
 * @property string $ubicacion
 * @property string $razon_baja
 * @property int $id_destino
 *
 * @property DestinoFinal $destino
 * @property Rubro $rubro
 * @property Departamento $departamento
 */
class Bajas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bajas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_departamento', 'id_rubro', 'cantidad', 'id_destino'], 'integer'],
            [['articulo'], 'required'],
            [['fecha'], 'safe'],
            [['articulo'], 'string', 'max' => 200],
            [['descripcion', 'ubicacion', 'razon_baja'], 'string', 'max' => 255],
            [['id_destino'], 'exist', 'skipOnError' => true, 'targetClass' => DestinoFinal::className(), 'targetAttribute' => ['id_destino' => 'id_destino']],
            [['id_rubro'], 'exist', 'skipOnError' => true, 'targetClass' => Rubro::className(), 'targetAttribute' => ['id_rubro' => 'id_rubro']],
            [['id_departamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['id_departamento' => 'id_departamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_baja' => 'Id Baja',
            'id_departamento' => 'Departamento',
            'id_rubro' => 'Rubro',
            'articulo' => 'Articulo',
            'fecha' => 'Fecha',
            'cantidad' => 'Cantidad',
            'descripcion' => 'Descripcion',
            'ubicacion' => 'Ubicacion',
            'razon_baja' => 'Razon Baja',
            'id_destino' => 'Destino',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDestino()
    {
        return $this->hasOne(DestinoFinal::className(), ['id_destino' => 'id_destino']);
    }
    public function getTipoDestino(){ 
    
        $tipo=DestinoFinal::find()->all(); 
        $tipoLista=ArrayHelper::map($tipo, 'id_destino' , 'tipo_destino');
        return $tipoLista;
    //ir a articulo\_form.php
       }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRubro()
    {
        return $this->hasOne(Rubro::className(), ['id_rubro' => 'id_rubro']);
    }

    public function getTipoRubro(){ 
    
        $tipo=Rubro::find()->all(); 
        $tipoLista=ArrayHelper::map($tipo, 'id_rubro' , 'rubro');
        return $tipoLista;
    //ir a articulo\_form.php
       }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento(){
        return $this->hasOne(Departamento::className(), ['id_departamento' => 'id_departamento']);
    }
    
    
    public function getTipoDepartamento(){ 
    
        $tipo=Departamento::find()->all(); 
        $tipoLista=ArrayHelper::map($tipo, 'id_departamento' , 'departamento');
        return $tipoLista;
    //ir a articulo\_form.php
       }
}
