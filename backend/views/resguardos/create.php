<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Resguardos */

$this->title = 'Create Resguardos';
$this->params['breadcrumbs'][] = ['label' => 'Resguardos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resguardos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
