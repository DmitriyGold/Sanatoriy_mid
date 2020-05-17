<?php

use yii\helpers\Url;

$this->title = 'Лицензия';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mt-5 pt-5 container">
    <div class="row">
        <div class="col-12 col-lg-6 ">
            <img class="my-license" src="<?= Url::to('@web/images/license/license1.jpg'); ?>" alt="лицензия сторона 1">
        </div>

        <div class="col-12 col-lg-6">
            <img class="my-license" src="<?= Url::to('@web/images/license/license2.jpg'); ?>" alt="лицензия сторона 2">
        </div>
    </div>

    <div class="block-3px my-4"></div>

    <div class="row my-3 justify-content-center">
        <a class="" href="<?= Url::to(['/uploads/license.pdf']); ?>" target="target-blank"><strong>нормативные документы в формате .PDF</strong></a> 
    </div>


</div>



