<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\db\Consultations;
use app\models\db\Procedures;


class ServicesController extends AppController {

    
    public function actionConsultations() {
        
        $consultations = Consultations::find()->all();
        
        return $this->render('consultations', compact('consultations'));
    }
    
    
   public function actionProcedures() {
       
       $procedures = Procedures::find()->all();
       
       return $this->render('procedures', compact('procedures'));
   }  
    
    
    
}
