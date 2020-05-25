<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Scrub */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scrub-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hide')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
