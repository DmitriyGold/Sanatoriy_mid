<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Dzhakuzi */

$this->title = 'Create Dzhakuzi';
$this->params['breadcrumbs'][] = ['label' => 'Dzhakuzis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dzhakuzi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
