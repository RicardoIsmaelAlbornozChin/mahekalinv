<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinoFinal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="destino-final-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_destino')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
