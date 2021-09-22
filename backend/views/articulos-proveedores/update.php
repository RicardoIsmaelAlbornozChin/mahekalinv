<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticulosProveedores */

$this->title = 'Update Articulos Proveedores: ' . $model->id_articulosproveedores;
$this->params['breadcrumbs'][] = ['label' => 'Articulos Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_articulosproveedores, 'url' => ['view', 'id' => $model->id_articulosproveedores]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articulos-proveedores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
