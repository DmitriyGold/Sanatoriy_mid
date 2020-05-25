<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "cosmetology".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property float|null $price2
 * @property int|null $hide
 */
class Cosmetology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cosmetology';
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
            'price2' => 'Price2',
            'hide' => 'Hide',
        ];
    }
}
