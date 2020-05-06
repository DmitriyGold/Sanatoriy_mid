<?php
$this->title = 'Консультации специалистов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Консультации специалистов</h4>

    <div class="row my-4">
        <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.
            Маленький, напоивший, грустный подпоясал имеет прямо оксмокс он дорогу пунктуация на 
            берегу текста всемогущая залетают большой то рукописи мир языкового свой?</p>
    </div>

        <div class="row">
            <div class="col-1">№</div>
            <div class="col-7">Наименование консультации</div>
            <div class="col-2">Первичный, руб</div>
            <div class="col-2">Повторный, руб</div>
        </div>    
    
    <?php $i = 0; ?>
    <?php foreach ($consultations as $value) { ?>
        <?php $i++; ?>
        <div class="row">
            <div class="col-1"> <?= $i ?></div>
            <div class="col-7"><?= $value->name ?></div>
            <div class="col-2"><?= $value->price1 ?></div>
            <div class="col-2"><?= $value->price2 ?></div>
        </div>

    <?php } ?>   


</div>