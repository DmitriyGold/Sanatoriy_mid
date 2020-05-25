<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet6 */

$this->title = 'Create Cosmet6';
$this->params['breadcrumbs'][] = ['label' => 'Cosmet6s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmet6-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
