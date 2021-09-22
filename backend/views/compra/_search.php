<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_compra') ?>

    <?= $form->field($model, 'numero_factura') ?>

    <?= $form->field($model, 'fecha_compra') ?>

    <?= $form->field($model, 'subtotal') ?>

    <?= $form->field($model, 'iva') ?>

    <?php // echo $form->field($model, 'total_factura') ?>

    <?php // echo $form->field($model, 'id_proveedor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
