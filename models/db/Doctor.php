<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property int $id
 * @property string $fio
 * @property string|null $image
 * @property string|null $description1
 * @property string|null $description2
 * @property string|null $schedule
 * @property int|null $sort
 * @property int|null $hide
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['sort', 'hide'], 'integer'],
            [['fio', 'image', 'description1', 'description2', 'schedule'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'image' => 'Image',
            'description1' => 'Description1',
            'description2' => 'Description2',
            'schedule' => 'Schedule',
            'sort' => 'Sort',
            'hide' => 'Hide',
        ];
    }
}
