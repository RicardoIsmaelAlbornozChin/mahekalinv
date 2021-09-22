<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Resguardos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resguardos-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?=$form->field($model, 'fecha_resguardo')->widget(DatePicker::classname(),[

'options' => ['placeholder'=>'Fecha de resguardo'],
'pluginOptions'=>[
    'autoclose' =>true,
    'format' => 'yyyy-mm-dd'
]
]);  ?>
   <!-- Modificar el campo -->

<?= $form->field($model, 'id_departamento')->dropDownList($model->getTipoDepartamento(),
    ['prompt' => 'Selecciona un departamento']) ?>

<!-- Modificar el campo -->


    <!-- Modificar el campo -->

<?= $form->field($model, 'id_articulo')->dropDownList($model->getTipoArticulo(),
    ['prompt' => 'Selecciona un articulo']) ?>

<!-- Modificar el campo -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
