<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Articulo */

$this->title = $model->id_articulo;
$this->params['breadcrumbs'][] = ['label' => 'Articulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_articulo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_articulo], [
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
            'id_articulo',
            'articulo',
            'descripcion',
            'fecha_entrada',
            'cantidad_articulo',
            [
                'label'=>'Marca',
                'attribute'=> 'id_marca',
                //colocar el modelo  \ nombre de la funcion declarada en el articulo \ nombre de la columna
                'value'=>$model->marca->nombre_marca,
            ],
            [
                'label'=>'Categoria',
                'attribute'=>'id_categoria', //fk 
                'value'=>$model->categoria->nombre_categoria,
            ],
            
            [
                'label'=>'Modelo',
                'attribute'=>'id_modelo', //fk 
                'value'=>$model->modelo->nombre_modelo,
            ],
            [
                'label'=>'Departamento',
                'attribute'=>'id_departamento', //fk 
                'value'=>$model->departamento->departamento,
            ],
            [
                'label'=>'Unidades',
                'attribute'=>'id_unidades', //fk 
                'value'=>$model->unidades->nombre_unidades,
            ],
            
/* 



*/
        
           // 'id_marca',
           // 'id_modelo',
          
            //'id_unidades',
            //x'id_departamento',
        ],
    ]) ?>

</div>
