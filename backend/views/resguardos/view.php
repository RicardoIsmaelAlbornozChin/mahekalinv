<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Resguardos */

$this->title = $model->id_resguardo;
$this->params['breadcrumbs'][] = ['label' => 'Resguardos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resguardos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_resguardo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_resguardo], [
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
            'id_resguardo',
            'fecha_resguardo',
           
            [
                'label'=>'Departamento',
                'attribute'=>'id_departamento', //fk 
                'value'=>$model->idDepartamento->departamento,
            ],
            [
                'label'=>'Artículo',
                'attribute'=>'id_articulo', //fk 
                'value'=>$model->idArticulo->articulo,
            ],
            
            // 'id_departamento',
            //'id_articulo',
        ],
    ]) ?>

</div>
