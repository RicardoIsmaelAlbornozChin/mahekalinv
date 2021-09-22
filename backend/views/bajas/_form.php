<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Bajas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bajas-form">

    <?php $form = ActiveForm::begin(); ?>
   

    
    <?= $form->field($model, 'id_departamento')->dropDownList($model->getTipoDepartamento(),
    ['prompt' => 'Selecciona un departamento']) ?>

    <?= $form->field($model, 'id_rubro')->dropDownList($model->getTipoRubro(),
    ['prompt' => 'Selecciona un rubro']) ?>

    <?= $form->field($model, 'articulo')->textInput(['maxlength' => true]) ?>

    <!-- Modificar el campo -->

    <?= $form->field($model, 'fecha')->widget(DatePicker::classname(),[

    'options' => ['placeholder'=>'Fecha de entrada'],
        'pluginOptions'=>[
        'autoclose' =>true,
        'format' => 'yyyy-mm-dd'
 ]
  ]);?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razon_baja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_destino')->dropDownList($model->getTipoDestino(),
    ['prompt' => 'Selecciona un destino']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
