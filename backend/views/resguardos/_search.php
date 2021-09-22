<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ResguardosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resguardos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_resguardo') ?>

    <?= $form->field($model, 'fecha_resguardo') ?>

    <?= $form->field($model, 'id_departamento') ?>

    <?= $form->field($model, 'id_articulo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
