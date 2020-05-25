<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "pilling".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property int|null $hide
 * @property float|null $price2
 */
class Pilling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pilling';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['price1', 'price2'], 'number'],
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
            'price2' => 'Price2',
        ];
    }
}
