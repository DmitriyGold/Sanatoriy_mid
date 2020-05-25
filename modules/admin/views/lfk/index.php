<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\LfkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lfks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lfk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lfk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'time:datetime',
            'price1',
            'hide',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
