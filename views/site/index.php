<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Санаторий-профилакторий «Курорт-парк «Союз» МИД России». НЕ Официальный сайт';
?>
<div class="site-index">

    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner pt-4">
            <div class="carousel-item active">
                <img src="<?php echo Url::to('@web/images/carousel/foliage1.jpg') ?>" class="d-block w-100" alt="листва">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4><strong>Санаторий-профилакторий «Курорт-парк «Союз» МИД России».</strong> <br>
                        <small>Квалифицированный персонал, современные методы лечения и оздоровления.</small>
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo Url::to('@web/images/carousel/rowan1.jpg') ?>" class="d-block w-100" alt="рябина">
                <div class="carousel-caption d-none d-md-block text-uppercase">
                    <h4>Восстановление и оздоровление организма.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo Url::to('@web/images/carousel/cone1.jpg') ?>" class="d-block w-100" alt="шишка">
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

    <div class="row justify-content-center">
        <h2>ТЕСТОВЫЙ ВАРИАНТ. САЙТ В РАЗРАБОТКЕ!. </h2>
    </div>

    <div class="jumbotron container">
        <h1>Санаторий-профилакторий «Курорт-парк «Союз» МИД России»</h1>
        <p class="lead">современное медицинское оборудование, высокий профессионализм врачей, 
            экологически чистый воздух и живописные окрестности. <br>
            Здесь готовы позаботиться о вашем здоровье и приятном отдыхе!</p>
    </div>

    <div class="row justify-content-center my-5">
        <p><a class="btn btn-lg btn-success" href="#">Заявка на бронирование</a></p>
    </div>              

    <div class="body-content container">

        <div class="row my-2">
            <div class="col-12 text-center">
                <h3><strong>Медицинские услуги:</strong></h3>                
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">                        
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/11.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Консультации специалистов</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/22.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Процедурный кабинет</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/33.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Функциональная диагностика</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/44.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Физиотерапия</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/55.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Водолечение</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/66.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Грязелечение</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/77.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Массаж</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/88.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Лечебная физкультура</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-2">
                <div class="small-box-1 text-center">
                    <div class="main-card-services">
                        <a href="##"> <img src="<?php echo Url::to('@web/images/med_service/99.jpg') ?>" alt="">                                      
                            <div class="card-content-services">
                                <h4>Дерматология. Косметология</h4>
                                <p></p> 
                            </div> </a> 
                    </div>                    
                </div>                  
            </div>

        </div>



        <div class="row justify-content-center my-4">
            <p><a class="btn btn-lg btn-success" href="#">Акции и специальные предложения</a></p>
        </div>   

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3><strong>Новости:</strong></h3>                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, aliquid, numquam perspiciatis corrupti minima officiis accusantium suscipit natus amet culpa quam voluptatum tempore saepe! Molestiae, dolor rerum placeat consequatur ad odio impedit commodi quod ab cum. Totam, modi, impedit, minus sapiente laborum eaque iste cumque pariatur voluptatibus illum assumenda id ex velit reiciendis quisquam suscipit dolore ipsum tenetur recusandae delectus nam ea possimus rem itaque aliquam quis consequuntur libero dolorum deleniti omnis distinctio adipisci perferendis quo dolorem sed voluptates magnam iusto consectetur ad natus? Fuga, deleniti, assumenda officiis similique placeat nisi laudantium accusantium est eos porro modi reprehenderit error quisquam.
            </div>
        </div>
    </div>

    <div class="row m-3 ">
        <div class="col-12">
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/soyuz/1054945411/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Союз</a><a href="https://yandex.ru/maps/1/moscow-and-moscow-oblast/category/resort/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Санаторий в Москве и Московской области</a><iframe src="https://yandex.ru/map-widget/v1/-/COBcJVlz" width="1800" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>            
    </div>

</div>
</div>
