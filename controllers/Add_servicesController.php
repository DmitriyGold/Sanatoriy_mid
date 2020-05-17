<?php

namespace app\controllers;

use app\models\db\Scrub;
use app\models\db\Sauna;
use app\models\db\Khammam;
use app\models\db\Dzhakuzi;
use yii\helpers\Url;
use Yii;

class Add_servicesController extends AppController {

    public function actionTemp() {

        return $this->render('temp');
    }

    public function actionScrub() {
        $scrub = Scrub::find()->all();

        return $this->render('scrub', compact('scrub'));
    }

    public function actionSauna() {
        $sauna = Sauna::find()->all();

        return $this->render('sauna', compact('sauna'));
    }

    public function actionKhammam() {
        $khammam = Khammam::find()->all();

        return $this->render('khammam', compact('khammam'));
    }

    public function actionDzhakuzi() {

        $dzhakuzi = Dzhakuzi::find()->all();

        return $this->render('dzhakuzi', compact('dzhakuzi'));
    }

    public function actionSpa() {
     
        return $this->render('spa');
    }    
    
}
