<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Hydrotherapy */

$this->title = 'Update Hydrotherapy: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hydrotherapies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hydrotherapy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
