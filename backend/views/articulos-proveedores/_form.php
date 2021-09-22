<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticulosProveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulos-proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'precio_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_proveedor')->textInput() ?>

    <?= $form->field($model, 'id_articulo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
