<?php

use yii\helpers\Url;

$this->title = 'Карточка реквизитов';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mt-5 pt-5 container">
    <div class="row">
        <div class="col-12">
            <img class="my-license" src="<?= Url::to('@web/images/card.jpg'); ?>" alt="карточка реквизитов">
        </div>     
    </div>

    <a class="my-3" href="#">Загрузить карточку реквизитов  в Word формате.</a> 

</div>
