<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticulosProveedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulos-proveedores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_articulosproveedores') ?>

    <?= $form->field($model, 'precio_venta') ?>

    <?= $form->field($model, 'id_proveedor') ?>

    <?= $form->field($model, 'id_articulo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
