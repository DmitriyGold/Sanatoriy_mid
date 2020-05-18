<?php

namespace app\widgets;

use yii\base\Widget;

class DoctorWidget extends Widget {

    public $fio;
    public $image;
    public $description1;

    public function init() {
        parent::init();

        if ($this->fio === null)
            $this->fio = 'Иванов Петр Абрамович';
    }

    public function run() {

        return $this->render('doctor', ['fio' => $this->fio]);
       
        
    }

}
