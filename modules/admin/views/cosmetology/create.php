<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmetology */

$this->title = 'Create Cosmetology';
$this->params['breadcrumbs'][] = ['label' => 'Cosmetologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmetology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
