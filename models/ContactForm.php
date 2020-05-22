<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $email;
    public $phone;
    public $body;
    public $consent;  // согласие на обработку данных 
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'consent'], 'required'],
             [['name', 'email','body','phone'], 'trim'],            
    ['consent', 'compare', 'compareValue' => 1, 'message' => 'Выствите чебокс, иначе форма не отправится!'], // 'Согласие на обработку персональных данных',
            ['email', 'email'],
            // verifyCode needs to be entered correctly 'trim'
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'body' => 'Ваше сообщение',
            'consent' => 'Согласие на обработку персональных данных',
            'verifyCode' => 'введите проверочный код:',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation

      public function contact($email)
      {
      if ($this->validate()) {
      Yii::$app->mailer->compose()
      ->setTo($email)
      ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
      ->setReplyTo([$this->email => $this->name])
      ->setSubject('Заказать звонок-бронь. Санаторий МИД')
      ->setTextBody($this->body)
      ->send();

      return true;
      }
      return false;
      }
     */
}
