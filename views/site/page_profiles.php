<?php
$this->title = 'Профили лечения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 pt-5 container">
    <h4 class="my-2">
        Профили лечения</h4>

    <div class="row my-4">
        <p>Для того, чтобы вы полноценно отдохнули и провели время с максимальной пользой для здоровья,
            в санатории «» активно работает лечебно-диагностическая база, штат медицинских работников
            укомплектован высококвалифицированными специалистами, а в диагностике и лечении используются
            не только проверенные временем методы, но и более новые, современные технологии, оборудование
            и наработки, позволяющие подобрать эффективную программу оздоровления для каждого гостя санатория.
        <p>Санаторий «» специализируется на лечении и профилактике таких 
            распространённых в наше время заболеваний как:</p></p>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="accordion my-4" id="accordionExample">
                <div class="card">

                    <?php foreach ($profiles as $var1) { ?>

                        <div class="card-header" id="heading<?= $var1->id ?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $var1->id ?>" aria-expanded="false" aria-controls="collapse<?= $var1->id ?>">
                                    <?= $var1->name ?>
                                </button>
                            </h5>
                        </div>

                        <div id="collapse<?= $var1->id ?>" class="collapse" aria-labelledby="heading<?= $var1->id ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $var1->description ?>
                            </div>
                        </div>

                    <?php } ?>   









                </div>


            </div> 





        </div>
    </div>
</div>


