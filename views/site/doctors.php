<?php
$this->title = 'Наши врачи';
$this->params['breadcrumbs'][] = $this->title;

use app\widgets\DoctorWidget;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">Наши врачи</h4>

    <div class="row my-4">
        <p>страница в разработке!</p>
        
        <?= DoctorWidget::widget(); ?>
    </div>
    
    
    
    
    <div class="row my-4">
        <p>В нашем санатории-профилактории трудятся специалисты высокого уровня, которые применяют 
            все свои силы и знания для решения проблем, связанных с вашим здоровьем!</p>
    </div>

 
    
</div>  
