<?php
$this->title = 'Процедурный кабинет ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Процедурный кабинет</h4>

    <div class="row my-4">
        <p>Специально оборудованный кабинет для проведения
         различных лечебно-профилактических процедур. Все процедуры проводятся по назначению врачей
        . В процедурном кабинете работают медецинские сестры с большим опытом работы
         , выполняющие все манипуляции одноразовыми инструментами, строго соблюдая все правила асептики</p>
    </div>

        <div class="row">
            <div class="col-1">№</div>
            <div class="col-9">Наименование процедуры</div>
            <div class="col-2">Стоимость 1 процедуры, руб</div>
        </div>    
    
    <?php $i = 0; ?>
    <?php foreach ($procedures as $value) { ?>
        <?php $i++; ?>
        <div class="row">
            <div class="col-1"> <?= $i ?></div>
            <div class="col-9"><?= $value->name ?></div>
            <div class="col-2"><?= $value->price1 ?></div>
        </div>

    <?php } ?>   


</div> 