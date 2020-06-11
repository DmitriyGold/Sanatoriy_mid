<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $date_order
 * @property string|null $date_begin
 * @property string|null $date_end
 * @property string|null $conditions
 * @property string|null $nameFile
 * @property string|null $body
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['date_order', 'date_begin', 'date_end'], 'safe'],
            [['name', 'email', 'phone', 'conditions', 'nameFile', 'body'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['email'], 'unique'],
            [['phone'], 'unique'],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'date_order' => 'Date Order',
            'date_begin' => 'Date Begin',
            'date_end' => 'Date End',
            'conditions' => 'Conditions',
            'nameFile' => 'Name File',
            'body' => 'Body',
        ];
    }
}
