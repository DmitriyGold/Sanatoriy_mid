<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "dzhakuzi".
 *
 * @property int $id
 * @property string|null $description1
 * @property string|null $description2
 * @property string|null $description3
 * @property int|null $hide
 */
class Dzhakuzi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dzhakuzi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hide'], 'integer'],
            [['description1', 'description2', 'description3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description1' => 'Description1',
            'description2' => 'Description2',
            'description3' => 'Description3',
            'hide' => 'Hide',
        ];
    }
}
