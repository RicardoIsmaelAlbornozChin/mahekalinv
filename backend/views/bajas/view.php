<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bajas */

$this->title = $model->id_baja;
$this->params['breadcrumbs'][] = ['label' => 'Bajas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bajas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_baja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_baja], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_baja',
            [
                'label'=>'Departamento',
                'attribute'=>'id_departamento', //fk 
                'value'=>$model->departamento->departamento, //modelo -> nombre del campo
            ],
            [
                'label'=>'Rubro',
                'attribute'=>'id_rubro', //fk 
                'value'=>$model->rubro->rubro,
            ],
            'articulo',
            'fecha',
            'cantidad',
            'descripcion',
            'ubicacion',
            'razon_baja',
            'id_destino', //fk 
               
        ],
    ]) ?>

</div>
