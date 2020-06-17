<?php
$this->title = 'Грязелечение';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-3 pt-3 container">
    <h4 class="my-2">Грязелечение</h4>

    <div class="row my-4">
        <p>Источник <i>тамбуканской грязи</i> - озеро, которое находится 
            недалеко от города Пятигорска. Сложно определить его 
            точный возраст, но насчитывается уже несколько тысячелетий.
            Образовалась в результате разложения и брожения микроорганизмов
            флоры и фауны.</p>
        <p>На сегодняшний день наиболее значимыми являются свойства:</p>

    </div>

    <div class="row">
        <ul>
            <li>антисептические свойства;</li>
            <li>активация регенеративных процессов;</li>
            <li>противоспалительное действие;</li>
            <li>стимуляция микроциркуляции крови в клетках;</li>
            <li>улучшение обменных процессов в организме;</li>
            <li>имуномодулирующее действие;</li>
            <li>выведение из организма шлаков и токсинов;</li>
            <li>антиоксидантные свойства;</li>
            <li>глубокое очищение крови;</li>
            <li>отбеливающий эффект;</li>
            <li>себорегуляция;</li>
            <li>тонизирование;</li>
            <li>выравнивание тона кожи;</li>
            <li>повышение тургора;</li>
            <li>корректировка признаков старения и увядания.</li>
        </ul>

        <p>Таким образом, эта грязь оказывает положительное воздействие 
            не только на кожу, но и на весь организм в целом.
            По оценке экспертов, эффект от лечения не только не уступает грязям Мертвого моря, но и по некоторым
            параметрам даже превосходит.</p>
    </div>

    <div class="row mt-5 my-2">
        <h5>Процедуры аппликацией с грязью, которые оказываются в нашем санатории:</h5>
    </div>  

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Кол-во полей 20х20</div>        
        <div class="col-2">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($mud as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>

                <div class="row block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->number ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div>
            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->number ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div>  
                <?php
            }
        }
    }
    ?>   

    <div><p><i>1 процедура, 1 зона 40 минут.</i></p></div>

    <div class="block-3px my-4"></div>

</div>  
