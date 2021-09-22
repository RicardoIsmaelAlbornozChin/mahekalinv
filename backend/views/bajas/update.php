<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bajas */

$this->title = 'Update Bajas: ' . $model->id_baja;
$this->params['breadcrumbs'][] = ['label' => 'Bajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_baja, 'url' => ['view', 'id' => $model->id_baja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bajas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
