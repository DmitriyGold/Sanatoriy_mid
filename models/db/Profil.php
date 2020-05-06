<?php

namespace app\models\db;

use yii\db\ActiveRecord;

class Profil extends ActiveRecord { //  пример того если имя модели отличается от имени таблицы в б.д.
    
    public static function tableName() {
        return 'profiles';
    }
    
}