<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Scrub */

$this->title = 'Update Scrub: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Scrubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scrub-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
