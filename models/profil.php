<?php

namespace app\models;

use yii\db\ActiveRecord;

class Profil extends ActiveRecord {
    
    public static function tableName() {
        return 'profiles';
    }
    
}