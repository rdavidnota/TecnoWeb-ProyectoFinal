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
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
    
    echo 'OFERTAS';

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
     echo 'TITULACIONES';

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
     echo 'TITULACIONES';

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
     echo 'TITULACIONES';

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
     echo 'TITULACIONES';

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
