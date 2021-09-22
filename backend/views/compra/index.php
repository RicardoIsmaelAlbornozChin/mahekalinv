<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_compra',
            'numero_factura',
            'fecha_compra',
            //'subtotal',
           /* [
                'label' => 'Artículo',
                'attribute'=> 'id_compra',
                'value'=>'idCompra.subtotal', //Valor a visualizar ->nombre de la clase

            ],*/ 
             

            'iva',
            'total_factura',
          //  'id_proveedor',

            [
                'label' => 'Proveedor',
                'attribute'=> 'id_proveedor',
                'value'=>'idProveedor.razon_social', //Valor a visualizar ->nombre de la clase

        ], 




            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
