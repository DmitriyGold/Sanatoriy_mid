<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Diagnostics */

$this->title = 'Create Diagnostics';
$this->params['breadcrumbs'][] = ['label' => 'Diagnostics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnostics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
