<?php
$this->title = 'Функциональная диагностика';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Функциональная диагностика</h4>

    <div class="row my-4">
        <p>- объективная оценка, обнаружение отклонений и установление
            степени нарушений функции различных органов и физиологических систем
            организма на основе измерения физических, химических или иных
            объективных показателей их деятельности с помощью инструментальных
            или лабораторных методов исследования.</p>
    </div>

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-9 my-border-r">Наименование диагностики</div>
        <div class="col-2"><small>Стоимость 1 исследования, руб</small></div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($diagnostics as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-9 my-border-r"><?= $value->name ?></div>
                    <div class="col-2"><?= $value->price1 ?></div>
                </div> 
            <?php } else { ?>     
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-9 my-border-r"><?= $value->name ?></div>
                    <div class="col-2"><?= $value->price1 ?></div>
                </div> 
                <?php
            }
        }
    }
    ?> 
    
        <div class="block-3px my-4"></div>
</div> 