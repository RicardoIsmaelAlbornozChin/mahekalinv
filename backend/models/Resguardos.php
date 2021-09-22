<?php

namespace backend\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "resguardos".
 *
 * @property integer $id_resguardo
 * @property string $fecha_resguardo
 * @property integer $id_departamento
 * @property integer $id_articulo
 *
 * @property Departamento $idDepartamento
 * @property Articulo $idArticulo
 */
class Resguardos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resguardos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_resguardo'], 'safe'],
            [['id_departamento', 'id_articulo'], 'integer'],
            [['id_departamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['id_departamento' => 'id_departamento']],
            [['id_articulo'], 'exist', 'skipOnError' => true, 'targetClass' => Articulo::className(), 'targetAttribute' => ['id_articulo' => 'id_articulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_resguardo' => 'Id Resguardo',
            'fecha_resguardo' => 'Fecha Resguardo',
            'id_departamento' => 'Id Departamento',
            'id_articulo' => 'Id Articulo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id_departamento' => 'id_departamento']);
    }

    public function getTipoDepartamento(){ 

        $tipo=Departamento::find()->all(); 
        $tipoLista=ArrayHelper::map($tipo, 'id_departamento' , 'departamento');
        return $tipoLista;
    //ir a articulo\_form.php
       }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdArticulo()
    {
        return $this->hasOne(Articulo::className(), ['id_articulo' => 'id_articulo']);
    }


    //list
public function getTipoArticulo(){ 

    $tipo=Articulo::find()->all(); 
    $tipoLista=ArrayHelper::map($tipo, 'id_articulo' , 'articulo');
    return $tipoLista;
//ir a articulo\_form.php
   }





}
