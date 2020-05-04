<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="keywords" content="санаторий в Подмосковье, профилакторий в Подмосковье, 
              санаторий союз, санаторий союз мид, санаторий союз мид россии, Cанаторий-профилакторий в МО, 
              санаторий мид, санаторий мид рф, санаторий мид рф в подмосковье, санаторий мид рф московская область, 
              санаторий мид щелковский район, санаторий-профилакторий, 
              официальный сайт санаторий МИД России, санаторий союз, санаторий щёлково, 
              санаторий в Подмосковье, оздоровительный отдых в Подмосковье, санаторий путевка, 
              санаторий без мед. справки, санаторные услуги, санаторий бронирование, санаторий МИД купить путевку,
              контакты санатория МИД России, питание в санатории, санаторий мид питание, хороший санаторий,
              телефон санаторий МИД России, программы санатория МИД, лечебный курс в санатории">
        <meta name="author" content="Золотов Дмитрий Сергеевич">
        <meta name="description" content="Санаторий-профилакторий «Курорт-парк «Союз» МИД России». Официальный сайт">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <header class="header fixed-top">

                <div class="container-fluid header-top">
                    <div class="container">                            

                        <div class="row p-0 pt-2 m-0">
                            <div class="col-lg-2 text-center text-lg-left align-self-lg-center">                          
                                <a href="<?= Url::to(['/site/index']);?>"><img class="my-logo m-2" src="<?php @web ?>/images/soyuz-logo.png" alt="Логотип"></a>
                                
                            </div>

                            <div class="col-lg-5 text-left align-self-lg-center">                                                                                            
                                <p class="h6">Все условия для эффективного лечения </br>и комфортного отдыха</p>
                            </div>  

                            <div class="col-lg-3 d-none d-lg-block text-left align-self-lg-center">                                                                                          
                                <p class="h6">ресепшн: +7(495) 229-30-99</p>
                                <p class="h6">FAX: +7(496) 567-38-59</p>
                            </div>   

                            <div class="col-lg-3 d-lg-none  text-left align-self-lg-center ">                                                                                          
                                <span class="h5">+7(495) 229-30-99, FAX: +7(496) 567-38-59</span>
                            </div> 


                            <div class="col-lg-2 text-center text-lg-right align-self-lg-center p-0 m-0">
                                <button type="button" class="btn header-btn mb-1" data-toggle="modal" data-target="#myModal_Contact">
                                    заказать звонок</button>
                            </div>   

                        </div> 

                        <div class="row m-0 p-0">

                            <div class="d-none col-4 text-left align-self-lg-center">
                                <!--  Показываем панель админки -->
                                <?php if ((!Yii::$app->user->isGuest) && (Yii::$app->user->identity->role === 'admin')) : ?>
                                    <span class="small"><a href = "#">Админка</a></span>                                   
                                <?php endif; ?>
                            </div>

                            <div class="d-none col-8 text-right align-self-lg-center">
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                    <span class="small"><a href = "#" class = "nav-link"><?= Yii::$app->user->identity['username'] ?> Выход</a></span>                                    
                                <?php else : ?>

                                    <span class="small"><a href = "#">Вход</a></span>
                                    <span class="small"><a href = "#">Регистрация</a></span>
                                <?php endif; ?>
                            </div>   
                        </div> 
                    </div>
                </div> 

                <div class="container-fluid">                        
                    <div class="header-bottom">                        
                        <div class="container">
                            <nav  class="col-md-12 pt-0">
                                <ul class="navbar-nav flex-sm-row justify-content-sm-between align-items-center">
                                    <li class="nav-item dropdown active px-2">
                                        <a href="#" class="nav-link dropdown-toggle" 
                                           id="navbarDropdownMenuLink" data-toggle="dropdown" 
                                           aria-haspopup="true" aria-expanded="false">О санатории</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="<?= Url::to(['/site/about']); ?>">О нас</a>
                                            <a class="dropdown-item" href="<?= Url::to(['/site/schedule']); ?>">График работы</a>
                                            <a class="dropdown-item" href="<?= Url::to(['/site/infrastructure']); ?>">Инфраструктура</a>
                                            <a class="dropdown-item" href="<?= Url::to(['/site/license']); ?>">Лицензия</a>
                                            <a class="dropdown-item" href="#">Контролирующие органы</a>
                                            <a class="dropdown-item" href="#">Питание</a>
                                            <a class="dropdown-item" href="#">Отзывы???</a>
                                            <a class="dropdown-item" href="#">Интересные места рядом</a> 
                                            <a class="dropdown-item" href="#">Нормативные документы</a>
                                        </div>
                                    </li> 
                                    <li class="nav-item px-2"><a href="#" class="nav-link">Размещение</a></li>
                                    <li class="nav-item dropdown active px-2">
                                        <a href="#" class="nav-link dropdown-toggle" 
                                           id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
                                           aria-haspopup="true" aria-expanded="false">Лечение</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Профили лечения</a>
                                            <a class="dropdown-item" href="#">Наши врачи</a>
                                            <a class="dropdown-item" href="#">Методы лечения</a>
                                            <a class="dropdown-item" href="#">Лечебная база</a>
                                        </div>
                                    </li> 
                                    <li class="nav-item px-2"><a href="#" class="nav-link">Отдых и развлечения</a></li>
                                    <li class="nav-item px-2"><a href="#" class="nav-link">Путевки???</a></li>
                                    <li class="nav-item px-2"><a href="#" class="nav-link">Цены</a></li>
                                    <li class="nav-item px-2"><a href="<?= Url::to(['/site/contact']); ?>" class="nav-link">Контакты</a></li>
                                </ul>  
                            </nav>
                        </div>
                    </div>
                </div>                        
            </header>

            <div class="container-fluid main-container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 col-6 text-left align-self-center pl-5">
                        <p class="pull-left"> <strong>&copy; </strong>2017 -
                            <?= date('Y') ?>. НЕ официальный сайт санатория-профилактория
                            «Курорт-парк «Союз» Министерства иностранных дел Российской Федерации», Все права защищены.</p>   
                    </div>
                    <div class="col-lg-4 col-4 text-center align-self-center">
                        <p>приемная: +7(495)993-02-06, +7(49656)738-71</p>                                
                    </div>
                    <div class="col-lg-2 col-2 text-lg-right text-center align-self-center pr-5">
                        <p>Иконки соц сетей?</p>   
                    </div>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>                    
    </body>
</html>
<?php $this->endPage() ?>
