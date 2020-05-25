<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Leather */

$this->title = 'Create Leather';
$this->params['breadcrumbs'][] = ['label' => 'Leathers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leather-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
