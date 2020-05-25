<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Mud1 */

$this->title = 'Create Mud1';
$this->params['breadcrumbs'][] = ['label' => 'Mud1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mud1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
