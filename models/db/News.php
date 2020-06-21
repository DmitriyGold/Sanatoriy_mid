<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $heading
 * @property string|null $date_news
 * @property string|null $description
 * @property int|null $hide
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_news'], 'safe'],
            [['hide'], 'integer'],
            [['heading'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Heading',
            'date_news' => 'Date News',
            'description' => 'Description',
            'hide' => 'Hide',
        ];
    }
}
