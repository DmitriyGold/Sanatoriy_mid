<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\ScrubSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scrubs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scrub-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Scrub', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description1',
            'description2',
            'price1',
            //'hide',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
