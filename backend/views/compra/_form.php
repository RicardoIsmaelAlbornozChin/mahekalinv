<?php

use yii\helpers\Html;
//use kartik\widgets\ActiveForm;
use yii\widgets\ActiveForm;
//use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Compra */
/* @var $form yii\widgets\ActiveForm */
use yii\bootstrap4\Modal;
use kartik\date\DatePicker;
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero_factura')->textInput(['maxlength' => true]) ?>
    
   <?=$form->field($model, 'fecha_compra')->widget(DatePicker::classname(),[

    'options' => ['placeholder'=>'Fecha de compra'],
    'pluginOptions'=>[
        'autoclose' =>true,
        'format' => 'yyyy-mm-dd'
    ]
   ]);  ?>


    <?= $form->field($model, 'subtotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_factura')->textInput(['maxlength' => true]) ?>

    <!-- Modificar el campo -->

   <?= $form->field($model, 'id_proveedor')->dropDownList($model->getTipoProveedor(),
    ['prompt' => 'Selecciona un proveedor']) ?>

<!-- Modificar el campo -->


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
