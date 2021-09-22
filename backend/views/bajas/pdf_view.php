<?php

use yii\helpers\Html;

#$this->title = 'Bajas';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::cssFile('@web/css/pdf.css') ?>

<!--[if IE 5]>
    <link href="http://example.com/css/ie5.css" />
<![endif]-->


<div class="timesdate">
    <?php echo date("d-m-y"); ?>

</div>
<div>

<?php echo ("Folio"); ?>

</div>
<div class="col-md-4", id = "logom "><img src="<?= Yii::getAlias('@web') ?>/img/kalito.png" alt="logo" class=" img-responsive"></div>

<header>

<h2 id = "big-title">FORMATO DE BAJA DE EQUIPO DE OPERACION</h2>
<h3 id = "stittle">HOTEL MAHEKAL, PLAYA DEL CARMEN</h3>

</header>
   

<div class="container">
    <h2><?= Html::encode($this->title) ?></h2>

    <table id="customer">
        <tr id>
            <th>ID</th>
            <th>Departamento</th>
            <th>Rubro</th>
            <th>Cantidad</th>
            <th>Descripcion</th>
            <th>Razón de la baja</th>
            <th>Ubicacion</th>
            <th>Destino final</th>
        </tr>

        <?php foreach ($dataProvider->getModels() as $model) { ?>

            <tr>

                <th><?= $model->id_baja ?></th>

                <!-- Condiciones de departamentos-->

                <?php if ($model->id_departamento == 1) : ?>
                    <th><?php echo "Sistemas" ?></th>

                <?php elseif ($model->id_departamento == 2) : ?>
                    <th><?php echo "Recursos humanos" ?></th>

                <?php elseif ($model->id_departamento == 7) : ?>
                    <th><?php echo "Mantenimiento" ?></th>
                <?php else : ?>
                    <th><?php echo "" ?></th>
                <?php endif ?>


                <!-- Condiciones de rubros-->

                <?php if ($model->id_rubro == 1) : ?>

                    <th><?php echo "Cristaleria" ?></th>

                <?php elseif ($model->id_departamento == 2) : ?>
                    <th><?php echo "Loza" ?></th>

                <?php elseif ($model->id_departamento == 3) : ?>
                    <th><?php echo "Plaque" ?></th>

                <?php elseif ($model->id_departamento == 4) : ?>
                    <th><?php echo "Utensilios de cocina" ?></th>
                <?php elseif ($model->id_departamento == 5) : ?>
                    <th><?php echo "Blancos" ?></th>
                <?php elseif ($model->id_departamento == 6) : ?>
                    <th><?php echo "Accesorios" ?></th>
                <?php elseif ($model->id_departamento == 7) : ?>
                    <th><?php echo "Cómputo" ?></th>
                <?php elseif ($model->id_departamento == 8) : ?>
                    <th><?php echo "Herramientas" ?></th>
                <?php elseif ($model->id_departamento == 9) : ?>
                    <th><?php echo "Equipo eléctronico" ?></th>
                <?php elseif ($model->id_departamento == 10) : ?>
                    <th><?php echo "Equipo habitación" ?></th>
                <?php else : ?>
                    <th><?php echo "" ?></th>
                <?php endif ?>

                <th><?= $model->cantidad ?></th>
                <th><?= $model->descripcion ?></th>
                <th><?= $model->razon_baja ?></th>
                <th><?= $model->ubicacion ?></th>


                <!-- Condiciones de destino-->

                <?php if ($model->id_destino == 1) : ?>
                    <th><?php echo "Venta" ?></th>

                <?php elseif ($model->id_destino == 2) : ?>
                    <th><?php echo "Basura" ?></th>

                <?php elseif ($model->id_destino == 3) : ?>
                    <th><?php echo "Reciclado" ?></th>

                <?php else : ?>
                    <th><?php echo "" ?></th>

                <?php endif ?>


            <?php } ?>
            </tr>


    </table>

    <br>

</div>

</div>

<div class="row">
  <div class="column">
    <h2></h2>
    <p >Departamento</p>
    <p>Solicitante</p> <br>
    <p>____________________</p>
    <p>Firma y nombre</p>
  </div>
  <div class="column">
    <h2></h2>
    <p>Departamento</p>
    <p>costos</p>
    <p>validación</p>
    <p>____________________</p>
    <p>Firma y nombre</p>
  </div>
  <div class="column">
    <h2></h2>
    <p>Contralor general</p>
    <p>autorizó</p><br>
    <p>____________________</p>
    <p>Firma y nombre</p>
  </div>
  <div class="column">
    <h2></h2>
    <p>Gerente general</p>
    <p>autorizó</p><br>
    <p>____________________</p>
    <p>Firma y nombre</p>
  </div>
</div>
</div>