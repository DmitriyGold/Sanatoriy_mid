<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet5 */

$this->title = 'Create Cosmet5';
$this->params['breadcrumbs'][] = ['label' => 'Cosmet5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmet5-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
