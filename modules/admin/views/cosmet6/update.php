<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet6 */

$this->title = 'Update Cosmet6: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cosmet6s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cosmet6-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
