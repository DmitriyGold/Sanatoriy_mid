<?php
$this->title = 'Консультации специалистов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Консультации узких специалистов</h4>

    <div class="row my-4">
        <p>Главной задачей санатория-профилактория «Курорт-парк «Союз» МИД России», оснащенного 
            современным лечебно-диагностическим оборудованием, является восстановление
            и поддержание Вашего здоровья. </p> 
        <p>Эффективное лечение обеспечивает квалифицированный персонал и современное медицинское оборудование, 
            позволяющее применять наиболее эффективные методики оздоровления и реабилитации.</p>
    </div>

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Прием врача:</div>
        <div class="col-2 my-border-r">Первичный, руб</div>
        <div class="col-2">Повторный, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($consultations as $value) { ?>
        <?php
        
        $i++;
        if (($i % 2) == 0) {
            ?>
            <div class="row block-tabl-2 py-1">
                <div class="col-1 my-border-r"> <?= $i ?></div>
                <div class="col-7 my-border-r"><?= $value->name ?></div>
                <div class="col-2 my-border-r"><?= $value->price1 ?></div>
                <div class="col-2"><?= $value->price2 ?></div>
            </div>
    <?php } else { ?>

    <div class="row my-border-b">
                <div class="col-1 my-border-r py-1"> <?= $i ?></div>
                <div class="col-7 my-border-r"><?= $value->name ?></div>
                <div class="col-2 my-border-r"><?= $value->price1 ?></div>
                <div class="col-2 "><?= $value->price2 ?></div>
            </div>

        <?php }
    }
    ?>   

    
    <p><small>*</small><i>осмотр, консультация</i></p>
    
</div>