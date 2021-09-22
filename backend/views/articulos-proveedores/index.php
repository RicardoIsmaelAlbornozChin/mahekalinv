<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticulosProveedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articulos Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulos-proveedores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articulos Proveedores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_articulosproveedores',
            'precio_venta',
            'id_proveedor',
            'id_articulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
