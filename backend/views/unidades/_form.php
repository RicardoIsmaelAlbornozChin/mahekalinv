<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Unidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_unidades')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_unidades')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
