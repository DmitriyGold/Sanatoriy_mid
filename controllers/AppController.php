<?php


namespace app\controllers;

use yii\web\Controller;


class AppController extends Controller {

    public function debug($arr) { // глобальная функции для доступа в контроллере
        echo '<pre>' . print_r($arr, true) . '</pre>';
        die();
    }
    
}

// глобальная функции для доступа в виде
    function debug($arr) { 
        echo '<pre>' . print_r($arr, true) . '</pre>';
        die();
    }
      
