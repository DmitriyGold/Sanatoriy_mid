<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Hydrotherapy */

$this->title = 'Create Hydrotherapy';
$this->params['breadcrumbs'][] = ['label' => 'Hydrotherapies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hydrotherapy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
