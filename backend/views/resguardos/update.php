<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Resguardos */

$this->title = 'Update Resguardos: ' . $model->id_resguardo;
$this->params['breadcrumbs'][] = ['label' => 'Resguardos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_resguardo, 'url' => ['view', 'id' => $model->id_resguardo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resguardos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
