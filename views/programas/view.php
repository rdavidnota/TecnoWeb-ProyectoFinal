<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */

$this->title = 'Ver datos del programa';
//$model->id
$this->params['breadcrumbs'][] = ['label' => 'Programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Seguro que quieres eliminar este artículo?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dirigidoA',
            'objetivoGral',
            'perfilProfesional',
            'metodologia',
        ],
    ])
    ?>

    <br/>
    <br/>
    <br/>

    <?php
    
    echo 'OFERTA';

    echo GridView::widget([
        'dataProvider' => $ofertas,
        'columns' => [
            ['attribute' => 'titulacion.nombre'
            ],
            ['attribute' => 'titulacion.descripcion'
            ],
        ]
    ]);
    
    
    ?>

    <?php
     echo 'TITULACION';

    echo GridView::widget([
        'dataProvider' => $titulaciones,
        'columns' => [
            ['attribute' => 'titulacion.nombre'],
            ['attribute' => 'titulacion.descripcion'
            ],
        ]
    ]);
    
    
    ?>



    <?php
     echo 'REQUISITOS';

    echo GridView::widget([
        'dataProvider' => $requisitos,
        'columns' => [
            ['attribute' => 'titulacion.nombre'
            ],
            ['attribute' => 'titulacion.descripcion'
            ],
        ]
    ]);
    
    
    ?>

    
    <?php
     echo 'MODALIDADES DE PAGO';

    echo GridView::widget([
        'dataProvider' => $modalidadesPagos,
        'columns' => [
            ['attribute' => 'titulacion.nombre'
            ],
            ['attribute' => 'titulacion.descripcion'
            ],
        ]
    ]);
    
    
    ?>

    
    
    
    <?php
     echo 'MODULOS';

    echo GridView::widget([
        'dataProvider' => $modulos,
        'columns' => [
            ['attribute' => 'titulacion.nombre'
            ],
            ['attribute' => 'titulacion.descripcion'
            ],
        ]
    ]);
    
    
    ?>

    
    


</div>
