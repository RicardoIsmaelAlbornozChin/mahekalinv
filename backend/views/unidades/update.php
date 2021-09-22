<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Unidades */

$this->title = 'Update Unidades: ' . $model->id_unidades;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unidades, 'url' => ['view', 'id' => $model->id_unidades]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
