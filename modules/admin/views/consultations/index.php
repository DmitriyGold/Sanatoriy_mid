<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\ConsultationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consultations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consultations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consultations', ['create'], ['class' => 'btn btn-success']) ?>
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
            'price2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
