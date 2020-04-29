<?php

use yii\helpers\Url;

$this->title = 'Лицензия';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mt-5 pt-5 container  align-content-center">
    <div class="row  align-content-center">
        <div class="col-12  align-content-center">

            <img src="<?= Url::to('@web/images/license/license.jpg'); ?>" alt="лицензия"> <br><br>
            <a href="#">открыть в формате .PDF</a>  
        </div>
    </div>
</div>



