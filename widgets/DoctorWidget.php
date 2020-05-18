<?php

namespace app\widgets;

use yii\base\Widget;

class DoctorWidget extends Widget {

    public $fio;
    public $image;
    public $description1;

    public function init() {
        parent::init();

        if ($this->image === null)
            $this->image = 'NoPicAvailable.jpg';
    }

    public function run() {
        
        return $this->render('doctor', ['fio' => $this->fio,
                    'image' => $this->image,
                    'description1' => $this->description1
        ]);
    }

}
