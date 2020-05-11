<?php
$this->title = 'Лечебная физкультура';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Лечебная физкультура</h4>

    <div class="row my-4">
        <p>Восстановить силы, сохранить молодость и просто отдохнуть с пользой, вам помогут специалисты отделения лечебной физкультуры.
        </p>
    </div>

    <h5>Наш санаторий может предложить Вам:</h5>     

    <div class="row my-1">
        <ul>
            <li>индивидуальные и групповые занятия лечебной физкультурой</li>
            <li>механнотерапию на аппаратах при заболеваниях различных органов;</li>
            <li>гидрокинезетерапию;</li>
            <li>бассейн;</li>            
            <li>лечебную физкультуру с использованием тренажеров;</li>
            <li>и многое другое</li>            
        </ul>
    </div>

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Время одного занятия, минут</div>        
        <div class="col-2">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($lfk as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
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

                <?php
            }
        }
    }
    ?>   


    <div class="block-3px my-4"></div>

</div>  
