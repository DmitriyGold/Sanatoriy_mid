<?php
$this->title = 'Наши врачи';
$this->params['breadcrumbs'][] = $this->title;

use app\widgets\DoctorWidget;
?>
<div class="mt-2 pt-2 container">
    <h4 class="my-2">Наши врачи</h4>

    <div class="row my-4">
        <p>В нашем санатории-профилактории трудятся специалисты высокого уровня, которые применяют 
            все свои силы и знания для решения проблем, связанных с вашим здоровьем!</p>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-between">       

        <?php foreach ($doctor as $value) { ?>

            <?=
            DoctorWidget::widget([ 'id' => $value->id,
                'fio' => $value->fio,
                'image' => $value->image,
                'description1' => $value->description1
            ]);
            ?>        

<?php } ?>
    </div>

    <div class="block-3px my-4"></div>






</div>  
