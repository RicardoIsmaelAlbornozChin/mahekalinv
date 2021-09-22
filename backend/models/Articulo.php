<?php

namespace backend\models;
use backend\models\Marca;
use backend\models\Modelo;
use backend\models\Categoria;
use backend\models\Departamento;
use backend\models\Unidades;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "articulo".
 *
 * @property integer $id_articulo
 * @property string $articulo
 * @property string $descripcion
 * @property string $fecha_entrada
 * @property integer $cantidad_articulo
 * @property integer $id_marca
 * @property integer $id_modelo
 * @property integer $id_categoria
 * @property integer $id_unidades
 * @property integer $id_departamento
 */
class Articulo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articulo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_entrada'], 'safe'],
            [['cantidad_articulo', 'id_marca', 'id_modelo', 'id_categoria', 'id_unidades', 'id_departamento'], 'integer'],
            [['articulo', 'descripcion'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_articulo' => 'Id Articulo',
            'articulo' => 'Articulo',
            'descripcion' => 'Descripcion',
            'fecha_entrada' => 'Fecha Entrada',
            'cantidad_articulo' => 'Cantidad Articulo',
            'id_marca' => 'Id Marca',
            'id_modelo' => 'Id Modelo',
            'id_categoria' => 'Id Categoria',
            'id_unidades' => 'Id Unidades',
            'id_departamento' => 'Id Departamento',
        ];
    }

 
        public function getMarca()
        {

            return $this->hasOne(Marca::className(), ['id_marca' => 'id_marca']); //
        }

   //Obtener el tipo de marca
   public function getTipoMarca(){ //funcion para retornar la lista 

    $tipo=Marca::find()->all(); //ttabla marca, busca todo los datos 
    $tipoLista=ArrayHelper::map($tipo, 'id_marca' , 'nombre_marca'); //Mapea los datos y pasamos los parametros 1\
    return $tipoLista; //retorna la lista
//ir a articulo\_form.php
   }

   public function getCategoria(){
       return $this->hasOne(Categoria::className(), ['id_categoria' => 'id_categoria']);
   }
//Categoria
   public function getTipoCategoria(){ 

    $tipo=Categoria::find()->all(); 
    $tipoLista=ArrayHelper::map($tipo, 'id_categoria' , 'nombre_categoria');
    return $tipoLista;
//ir a articulo\_form.php
   }

   //Modelo

   public function getModelo(){
    return $this->hasOne(Modelo::className(), ['id_modelo' => 'id_modelo']);
}
    
    public function getTipoModelo(){ 

    $tipo=Modelo::find()->all(); 
    $tipoLista=ArrayHelper::map($tipo, 'id_modelo' , 'nombre_modelo');
    return $tipoLista;
//ir a articulo\_form.php
   }


//Departamento
public function getDepartamento(){
    return $this->hasOne(Departamento::className(), ['id_departamento' => 'id_departamento']);
}


public function getTipoDepartamento(){ 

    $tipo=Departamento::find()->all(); 
    $tipoLista=ArrayHelper::map($tipo, 'id_departamento' , 'departamento');
    return $tipoLista;
//ir a articulo\_form.php
   }

//unidades

public function getUnidades(){
    return $this->hasOne(Unidades::className(), ['id_unidades' => 'id_unidades']);
}

public function getTipoUnidades(){ 

    $tipo=Unidades::find()->all(); 
    $tipoLista=ArrayHelper::map($tipo, 'id_unidades' , 'nombre_unidades');
    return $tipoLista;
//ir a articulo\_form.php
   }

}
