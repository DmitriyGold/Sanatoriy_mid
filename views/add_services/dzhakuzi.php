<?php

use yii\helpers\Url;

$this->title = 'Джакузи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Джакузи</h4>

    <div class="row my-4">
        <p>При гидромассаже струи воды, смешанной с пузырьками воздуха, 
            оказывают интенсивное давление на определенные участки тела.
            Вода с силой вьбрасывается из специальных форсунок, расположенных
            в разных зонах ванны. Направленность и интенсивность воздушно-водных 
            потоков можно регулировать.</p> 
    </div>


    <?php foreach ($dzhakuzi as $value) { ?>
        <div class="row py-4">

            <div class="col-3"><img class="block-img2" src="<?= Url::to(['/images/add_service/dzakuz1.jpg']) ?>" alt="L;frepb"></div> 
            <div class="col-9">
                <div class="row"><strong><?= $value->description1 ?></strong></div> 
                <div class="row"><strong><?= $value->description2 ?></strong></div> 
                <div class="row"><strong><?= $value->description3 ?></strong></div> 
            </div> 
        </div>  

    <?php } ?>

    <div class="block-3px my-4"></div>

    <div class="row mt-4">
        <div>
            <p>Гидромассажные ванны могут стать настоящим спасением при заболеваниях 
                нервной системы, опорно-двигательного аппарата, сильной усталости или
                стрессе. Они прекрасно тонизируют кожу, расслабляют, успокаивают.
            </p>           
        </div>
    </div>

