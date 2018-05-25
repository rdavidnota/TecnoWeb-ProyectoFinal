<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modalidaddepago */

$this->title = 'Crear Modalidad de pago';
$this->params['breadcrumbs'][] = ['label' => 'Modalidad de pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalidaddepago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
