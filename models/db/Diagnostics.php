<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "diagnostics".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property int|null $hide
 */
class Diagnostics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diagnostics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['price1'], 'number'],
            [['hide'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'price1' => 'Price1',
            'hide' => 'Hide',
        ];
    }
}
