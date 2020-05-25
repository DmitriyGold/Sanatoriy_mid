<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Pilling */

$this->title = 'Create Pilling';
$this->params['breadcrumbs'][] = ['label' => 'Pillings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pilling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
