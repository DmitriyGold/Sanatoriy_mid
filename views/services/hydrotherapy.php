<?php
$this->title = 'Водолечение';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Водолечение</h4>

    <div class="row my-4">
        <p>Физиологическое действие водолечения основано на температурном, механическом и химическом раздражении 
            рецепторов кожи минеральной и обычной водой.</p>
    </div>

    <div class="row  block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Время, минут</div>        
        <div class="col-2"><small>Стоимость 1 процедуры, руб</small></div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($hydrotherapy as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
    
            <div class="row block-tabl-2 py-1">
                <div class="col-1 my-border-r"> <?= $i ?></div>
                <div class="col-7 my-border-r"><?= $value->name ?></div>
                <div class="col-2 my-border-r"><?= $value->time ?></div>                
                <div class="col-2"><?= $value->price1 ?></div>
            </div> 
    
                <?php } else { ?>  
            <div class="row my-border-b py-1">
                <div class="col-1 my-border-r"> <?= $i ?></div>
                <div class="col-7 my-border-r"><?= $value->name ?></div>
                <div class="col-2 my-border-r"><?= $value->time ?></div>                
                <div class="col-2"><?= $value->price1 ?></div>
            </div> 
    
        <?php }
    }} ?>   

        <div class="block-3px my-4"></div>

</div> 
