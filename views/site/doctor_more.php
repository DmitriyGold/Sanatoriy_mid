<?php

use yii\helpers\Url;

$this->title = 'Подробнее';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mt-2 pt-2 container">

    <div class="row">

        <div class="col px-0 my-2">


            <?php foreach ($doctor as $value) { ?>

                <div class="py-3 text-center">

                    <?php
                    if ($value->image === null)
                        $value->image = 'NoPicAvailable.jpg';
                    ?>

                    <img class="block-doctor-img" src="<?= Url::to('@web/images/doctor/' . $value->image); ?>" alt="фото сотрудника">
                </div>
                <div class="py-3 text-center"><strong><?= $value->fio ?></strong></div>
                <div class="p-2 text-center" style="height: 70px"><?= $value->description1 ?></div>
                <div class="p-2 text-center" style="height: 150px"><?= $value->description2 ?></div>

<?php } ?>            
        </div>

    </div>

</div>