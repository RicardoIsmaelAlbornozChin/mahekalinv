<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BajasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bajas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bajas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Baja', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Generar PDF', ['pdf'], ['class' => 'btn btn-danger']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_baja',
            'articulo',
            [
                'label'=>'Departamento',
                'attribute'=> 'id_departamento',
                'value'=>'departamento.departamento',

            ], 
          [

            'label'=>'Rubro',
            'attribute'=> 'id_rubro',
            'value'=>'rubro.rubro',   
          ], 
           // 'id_rubro',
            
            'fecha',
            //'cantidad',
            //'descripcion',
            //'ubicacion',
            //'razon_baja',
            //'id_destino',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
