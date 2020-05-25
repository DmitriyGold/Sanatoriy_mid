<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Scrub */

$this->title = 'Create Scrub';
$this->params['breadcrumbs'][] = ['label' => 'Scrubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scrub-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
