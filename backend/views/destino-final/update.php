<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinoFinal */

$this->title = 'Update Destino Final: ' . $model->id_destino;
$this->params['breadcrumbs'][] = ['label' => 'Destino Finals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_destino, 'url' => ['view', 'id' => $model->id_destino]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="destino-final-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
