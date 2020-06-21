<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of gallery1Widget
 *
 * @author Дмитрий
 */
class Gallery1Widget extends Widget {

    public $col; // 
    public $image; // путь к картинке 

    public function init() {
        parent::init();
    }

    public function run() {

        return $this->render('gallery1', [
                    'col' => $this->col,
                    'image' => $this->image
        ]);
    }

}
