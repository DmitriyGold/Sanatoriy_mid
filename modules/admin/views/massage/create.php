<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Massage */

$this->title = 'Create Massage';
$this->params['breadcrumbs'][] = ['label' => 'Massages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
