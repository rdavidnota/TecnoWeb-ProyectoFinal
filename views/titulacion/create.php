<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Titulacion */

$this->title = 'Crear Titulacion';
$this->params['breadcrumbs'][] = ['label' => 'Titulaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
