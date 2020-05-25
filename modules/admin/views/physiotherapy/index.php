<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\PhysiotherapySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Physiotherapies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="physiotherapy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Physiotherapy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'price1',
            'hide',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
