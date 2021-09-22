<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCompra */

$this->title = 'Update Detalle Compra: ' . $model->id_detalle_compra;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detalle_compra, 'url' => ['view', 'id' => $model->id_detalle_compra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-compra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
