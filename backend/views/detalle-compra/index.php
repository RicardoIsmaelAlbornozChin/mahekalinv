<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DetalleCompraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-compra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detalle Compra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detalle_compra',
            'id_compra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
