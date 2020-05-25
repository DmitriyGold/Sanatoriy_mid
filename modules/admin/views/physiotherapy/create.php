<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Physiotherapy */

$this->title = 'Create Physiotherapy';
$this->params['breadcrumbs'][] = ['label' => 'Physiotherapies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="physiotherapy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
