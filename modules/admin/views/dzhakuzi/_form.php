<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Dzhakuzi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dzhakuzi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hide')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
