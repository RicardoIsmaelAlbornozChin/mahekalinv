<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Articulo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'articulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'fecha_entrada')->widget(DatePicker::classname(),[

        'options' => ['placeholder'=>'Fecha de entrada'],
        'pluginOptions'=>[
        'autoclose' =>true,
        'format' => 'yyyy-mm-dd'
]
]);  ?>

    <?= $form->field($model, 'cantidad_articulo')->textInput() ?>

<!-- Modificar el campo -->

   <?= $form->field($model, 'id_marca')->dropDownList($model->getTipoMarca(),
    ['prompt' => 'Selecciona una marca']) ?>

<!-- Modificar el campo -->

<?= $form->field($model, 'id_categoria')->dropDownList($model->getTipoCategoria(),
    ['prompt' => 'Selecciona una categoria']) ?>

<!-- Modificar el campo -->

<?= $form->field($model, 'id_modelo')->dropDownList($model->getTipoModelo(),
    ['prompt' => 'Selecciona un modelo']) ?>

<?= $form->field($model, 'id_departamento')->dropDownList($model->getTipoDepartamento(),
    ['prompt' => 'Selecciona un departamento']) ?>

<?= $form->field($model, 'id_unidades')->dropDownList($model->getTipoUnidades(),
    ['prompt' => 'Selecciona un tipo de unidad']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
