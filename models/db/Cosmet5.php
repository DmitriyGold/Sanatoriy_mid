<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "cosmet5".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property int|null $hide
 */
class Cosmet5 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cosmet5';
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
