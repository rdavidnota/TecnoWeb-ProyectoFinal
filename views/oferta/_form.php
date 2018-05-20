<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fechaini')->textInput() ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
