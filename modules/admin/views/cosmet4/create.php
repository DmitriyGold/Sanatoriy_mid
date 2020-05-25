<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet4 */

$this->title = 'Create Cosmet4';
$this->params['breadcrumbs'][] = ['label' => 'Cosmet4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmet4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
