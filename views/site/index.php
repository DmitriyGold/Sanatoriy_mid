<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Санаторий-профилакторий «Курорт-парк «Союз» МИД России». НЕ Официальный сайт';
?>
<div class="site-index my-content">

    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= Url::to('@web/images/carousel/foliage1.jpg') ?>" class="d-block w-100" alt="листва">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Санаторий-профилакторий «Курорт-парк «Союз» МИД России».</strong> <br>
                        <small>Квалифицированный персонал, современные методы лечения и оздоровления.</small>
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= Url::to('@web/images/carousel/rowan1.jpg') ?>" class="d-block w-100" alt="рябина">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4>Восстановление и оздоровление организма.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= Url::to('@web/images/carousel/cone1.jpg') ?>" class="d-block w-100" alt="шишка">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4>Мы ежедневно доказываем, что лечение можно сочетать с первоклассным отдыхом на природе!</h4>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    

    <div class="jumbotron my-background-col">
        <h3><strong>Санаторий-профилакторий «Курорт-парк «Союз» МИД России»</strong></h3>
        <p class="lead" >современное медицинское оборудование, высокий профессионализм врачей, 
            экологически чистый воздух и живописные окрестности. <br>
            Здесь готовы позаботиться о вашем здоровье и приятном отдыхе!</p>
        <h5>ТЕСТОВЫЙ ВАРИАНТ. САЙТ В РАЗРАБОТКЕ!</h5>
    </div>

    <div class="row my-4">
        <div class="col-12 text-center">
            <h3><strong>Новости:</strong></h3>                
            <p id="servise"><strong>COVID-19</strong>
                В соответствии с постановлением Правительства РФ от 27 марта 2020 года 
                санаторий временно приостановил с 28 марта 2020 года до 1 июня 2020 года бронирование мест, 
                приём и размещение граждан в пансионатах, домах отдыха, санаториях, 
                детских лагерях круглогодичного действия и гостиницах, расположенных в курортах федерального, 
                регионального и местного значения, а также в иных санаторно-курортных организация.</p>
        </div>
    </div>

    <div class="container-fluid  my-background-col pb-4"  >

        <div class="body-content container" >

            <div class="row my-4 pt-3" >
                <div class="col-12 text-center">
                    <h3><strong>Медицинские услуги:</strong></h3>                
                </div>
            </div>

            <div class="row my-background-col">
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">                        
                            <a href="<?= Url::to(['/services/consultations']); ?>"> 
                                <img src="<?php echo Url::to('@web/images/med_service/11.jpg') ?>" alt="">                                      
                                <div class="card-content-services">

                                    <h5 class="pb-2">Консультации специалистов</h5>

                                    <p>Терапевт, кардиолог, невролог, физиотерапевт, диетолог, гастроэнтеролог,
                                        педиатор, рефлексотерапевт, дерматовенеролог, врач ЛФК, врач ГБО, врач КМН.</p> 
                                </div> 
                            </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/procedures']); ?>"> <img src="<?php echo Url::to('@web/images/med_service/22.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Процедурный кабинет</h5>

                                    <p></p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>

                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/physiotherapy']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/44.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Физиотерапия</h5>
                                    <p>Отделение предлагает широкий спектр методов лечения, 
                                        проводимых на современном оборудовании ведущих фирм.</p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/hydrotherapy']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/55.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Водолечение</h5>
                                    <p>Наружное применение в лечебно-профилактических целях как пресной воды,
                                        так и минеральной в виде ванн и душей.
                                    </p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/mud']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/66.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Грязелечение</h5>
                                    <p>Грязь усиливает периферическое кровообращение, обладает противовоспалительным, обезболивающим и регенерирующим эффектом...                                    
                                    </p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <img src="<?php echo Url::to('@web/images/med_service/100.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h5 class="pb-2">Минеральная вода</h5>
                                <p>внутренний прием минеральной воды</p> 
                            </div>
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/massage']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/77.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Лечебный массаж</h5>
                                    <p> усиливает мышечный тонус, улучшает кровообращение,
                                        устраняет нервно-мышечные блоки и спазмы... 
                                    </p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/lfk']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/88.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Лечебная физкультура</h5>
                                    <p>Для полноценной реабилитации и оздоровления необходимо сочетать
                                        лечение с грамотно подобранной физической нагрузкой.</p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/services/cosmetology']) ?>"> <img src="<?php echo Url::to('@web/images/med_service/99.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Дерматология. Косметология</h5>
                                    <p></p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>

            </div>    

            <div class="row justify-content-center my-5"  id="add_servise">
                <button type="button" class="my-btn1 mb-1" data-toggle="modal" data-target="#myModal_Contact">
                    Заявка на бронирование</button>
            </div>   

        </div>        
    </div>    


    <div class="container-fluid  pb-4"  >

        <div class="body-content container" >         
            <div class="row my-4 pt-3" >
                <div class="col-12 text-center">
                    <h3><strong>Дополнительные услуги:</strong></h3>                
                </div>
            </div>            

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">                        
                            <a href="<?= Url::to(['/add_services/scrub']) ?>"> 
                                <img src="<?= Url::to('@web/images/add_service/d1.jpg') ?>" alt="Скраб для тела">                                      
                                <div class="card-content-services">

                                    <h5 class="pb-2">Скраб для тела</h5>

                                    <p></p> 
                                </div> 
                            </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/add_services/sauna']) ?>"> 
                                <img src="<?php echo Url::to('@web/images/add_service/d2.jpg') ?>" alt="Сауны">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Сауны</h5>

                                    <p></p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>

                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/add_services/khammam']) ?>">
                                <img src="<?= Url::to('@web/images/add_service/d3.jpg') ?>" alt="Хамам">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Хамам</h5>
                                    <p></p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/add_services/dzhakuzi']) ?>"> 
                                <img src="<?= Url::to('@web/images/add_service/d4.jpg') ?>" alt="Джакузи">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">Джакузи</h5>
                                    <p>
                                    </p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 my-2">
                    <div class="small-box-1 text-center">
                        <div class="main-card-services">
                            <a href="<?= Url::to(['/add_services/spa']) ?>"> 
                                <img src="<?= Url::to('@web/images/add_service/d5.jpg') ?>" alt="">                                      
                                <div class="card-content-services">
                                    <h5 class="pb-2">СПА процедуры</h5>
                                    <p>
                                    </p> 
                                </div> </a> 
                        </div>                    
                    </div>                  
                </div>


            </div>     

            <div class="row justify-content-center my-5" >
                <button type="button" class="my-btn1 mb-1" data-toggle="modal" data-target="#myModal_Contact">
                    Акции и предложения</button>
            </div>   

        </div>
    </div>

    <div class="row m-3 ">
        <div class="col-12">
            <div style="position:relative;overflow:hidden;">
                <a href="https://yandex.ru/maps/org/soyuz/1054945411/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Союз</a>
                <a href="https://yandex.ru/maps/1/moscow-and-moscow-oblast/category/resort/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">
                    Санаторий в Москве и Московской области</a><iframe src="https://yandex.ru/map-widget/v1/-/COBcJVlz" width="1800" height="400" frameborder="1" allowfullscreen="true" style="position:relative;">

                </iframe></div>
        </div>            
    </div>

</div>
</div>