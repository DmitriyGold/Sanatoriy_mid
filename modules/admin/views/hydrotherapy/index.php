<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\HydrotherapySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hydrotherapies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hydrotherapy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hydrotherapy', ['create'], ['class' => 'btn btn-success']) ?>
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
