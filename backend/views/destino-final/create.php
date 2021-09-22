<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinoFinal */

$this->title = 'Create Destino Final';
$this->params['breadcrumbs'][] = ['label' => 'Destino Finals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destino-final-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
