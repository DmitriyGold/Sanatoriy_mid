<?php

use yii\helpers\Url;
?>
<div class="col px-0 my-2">
    
    <div class="block-doctor">

        <div>
            <img class="block-doctor-img" src="<?= Url::to('@web/images/doctor/' . $image); ?>" alt="фото сотрудника">
        </div>
        <div class="py-3"><strong><?= $fio ?></strong></div>
        <div class="py-1"><?= $description1 ?></div>
        <div class="py-2"><a href="#">подробнее</a></div>

    </div>
</div>

