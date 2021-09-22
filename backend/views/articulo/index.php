<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticuloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articulo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_articulo',
            'articulo',
            'descripcion',
            'fecha_entrada', //:datetime
            'cantidad_articulo',
          //label -> muestra en el grid
          //attribute para poder usar el sort 
          //value ->para mostrar el valor   -> view ->detailview
            [
                    'label'=>'Marca',
                    'attribute'=> 'id_marca',
                    'value'=>'marca.nombre_marca',                    
            ],
            
            [
                    'label' => 'Categoria',
                    'attribute'=> 'id_categoria',
                    'value'=>'categoria.nombre_categoria', //Valor a visualizar ->nombre de la clase

            ], 
            [
                'label' => 'Modelo',
                'attribute'=> 'id_modelo',
                'value'=>'modelo.nombre_modelo', //Valor a visualizar ->nombre de la clase

        ],

        [
            'label' => 'Departamento',
            'attribute'=> 'id_departamento',
            'value'=>'departamento.departamento', //Valor a visualizar ->nombre de la clase

    ],
    [
        'label' => 'Unidades',
        'attribute'=> 'id_unidades',
        'value'=>'unidades.id_unidades', //Valor a visualizar ->nombre de la clase

],
             //'id_marca',
            // 'id_modelo',
            // 'id_categoria',
            // 'id_unidades',
            // 'id_departamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
