<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\db\Consultations;
use app\models\db\Procedures;
use app\models\db\Diagnostics;
use app\models\db\Physiotherapy;
use app\models\db\Hydrotherapy;
use app\models\db\Mud;
use app\models\db\Massage;
use app\models\db\Lfk;

class ServicesController extends AppController {

    public function actionConsultations() {

        $consultations = Consultations::find()->all();

        return $this->render('consultations', compact('consultations'));
    }

    public function actionProcedures() {

        $procedures = Procedures::find()->all();

        return $this->render('procedures', compact('procedures'));
    }

    public function actionDiagnostics() {

        $diagnostics = Diagnostics::find()->all();

        return $this->render('diagnostics', compact('diagnostics'));
    }

    public function actionPhysiotherapy() {

        $physiotherapy = Physiotherapy::find()->all();

        return $this->render('physiotherapy', compact('physiotherapy'));
    }

    public function actionHydrotherapy() {

        $hydrotherapy = Hydrotherapy::find()->all();

        return $this->render('hydrotherapy', compact('hydrotherapy'));
    }

    public function actionMud() {

        $mud = Mud::find()->all();

        return $this->render('mud', compact('mud'));
    }

    public function actionMassage() {

        $massage = Massage::find()->all();

        return $this->render('massage', compact('massage'));
    }    
 
        public function actionLfk() {

        $lfk = Lfk::find()->all();

        return $this->render('lfk', compact('lfk'));
    }  
    
}
