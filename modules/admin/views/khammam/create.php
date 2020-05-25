<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Khammam */

$this->title = 'Create Khammam';
$this->params['breadcrumbs'][] = ['label' => 'Khammams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khammam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
