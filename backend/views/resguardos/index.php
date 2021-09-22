<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResguardosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resguardos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resguardos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resguardos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_resguardo',
            'fecha_resguardo',
           // 'id_departamento',
           // 'id_articulo',
            [
                'label' => 'Departamento',
                'attribute'=> 'id_departamento',
                'value'=>'idDepartamento.departamento', //Valor a visualizar ->nombre de la clase
        
             ],

             [
                'label' => 'Articulo',
                'attribute'=> 'id_articulo',
                'value'=>'idArticulo.articulo', //Valor a visualizar ->nombre de la clase
        
             ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
