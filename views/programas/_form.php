<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programa-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'dirigidoA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivoGral')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perfilProfesional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metodologia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
