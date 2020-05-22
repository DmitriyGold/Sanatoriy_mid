<?php

use yii\helpers\Url;
?>
<div class="col px-0 my-2">

    <div class="block-doctor">

        <div>
            <img class="block-doctor-img" src="<?= Url::to('@web/images/doctor/' . $image); ?>" alt="фото сотрудника">
        </div>
        <div class="py-3 text-center"><strong><?= $fio ?></strong></div>
        <div class="p-2 text-center" style="height: 70px"><?= $description1 ?></div>


        <div class="pt-2 pb-4 text-center"><a href="<?= Url::to(['/site/doctor_more?id=' . $id]) ?>">подробнее</a></div>

    </div>
</div>

