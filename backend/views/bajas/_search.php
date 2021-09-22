<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BajasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bajas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_baja') ?>

    <?= $form->field($model, 'id_departamento') ?>

    <?= $form->field($model, 'id_rubro') ?>

    <?= $form->field($model, 'articulo') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'ubicacion') ?>

    <?php // echo $form->field($model, 'razon_baja') ?>

    <?php // echo $form->field($model, 'id_destino') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
