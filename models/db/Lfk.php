<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "lfk".
 *
 * @property int $id
 * @property string $name
 * @property int|null $time
 * @property float|null $price1
 * @property int|null $hide
 */
class Lfk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lfk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['time', 'hide'], 'integer'],
            [['price1'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time' => 'Time',
            'price1' => 'Price1',
            'hide' => 'Hide',
        ];
    }
}
