<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $image1
 * @property string|null $image2
 * @property int|null $type
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['image1', 'image2'], 'string', 'max' => 125],
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
            'description' => 'Description',
            'image1' => 'Image1',
            'image2' => 'Image2',
            'type' => 'Type',
        ];
    }
}
