<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\db\Profiles;
use app\models\db\Doctor;

class SiteController extends AppController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'foreColor' => 0x000000, // цвет символов
                'minLength' => 3, // минимальное количество символов
                'maxLength' => 4, // максимальное
                'offset' => 7, // расстояние между символами (можно отрицательное)
                'testLimit' => 2, // значение того сколько раз та же каптча, будет отображаться. 
            ////Влияет только на ошибочный ввод каптчи (на простой refresh не влияет)
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {

        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionSchedule() {
        return $this->render('schedule');
    }

    public function actionInfrastructure() {
        return $this->render('infrastructure');
    }

    public function actionLicense() {
        return $this->render('license');
    }

    public function actionSupervision() {
        return $this->render('supervision');
    }

    public function actionRequisites() {
        return $this->render('requisites');
    }

    public function actionMuseums() {
        return $this->render('museums');
    }

    public function actionPage_profiles() {

        $profiles = Profiles::find()->all();

        return $this->render('page_profiles', compact('profiles'));
    }

    public function actionDoctors() {

        $doctor = Doctor::find()->orderBy(['sort' => SORT_ASC, 'id' => SORT_ASC])->all();

        return $this->render('doctors', compact('doctor'));
    }

    public function actionDoctor_more($id) {

        $doctor = Doctor::find()->where(['id' => $id])->all();

        return $this->render('doctor_more', compact('doctor'));
    }

    public function actionVouchers() {

        return $this->render('vouchers');
    }

    public function actionPrices() {

        return $this->render('prices');
    }

    public function actionConditions() {
        return $this->render('conditions');
    }

    public function actionNutrition() {
        return $this->render('nutrition');
    }

    public function actionInfo() {
        return $this->render('info');
    }

    // сделать заявку на бронирование
    public function actionReservation() {

        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {

                Yii::$app->session->setFlash('success', 'Данные приняты. Наш сотрудник обязательно свяжется с Вами.');
                Yii::$app->session->setFlash('name', $model->name);
                Yii::$app->session->setFlash('phone', $model->phone);
                Yii::$app->session->setFlash('email', $model->email);


                if (($model->date_begin) <> null) 
                Yii::$app->session->setFlash('date_begin', 'Дата заезда: ' . $model->date_begin);
                
                    
                if (($model->date_end) <> null)
                    Yii::$app->session->setFlash('date_end', 'Дата отъезда: ' . $model->date_end);


                if (($model->body) <> null)
                    Yii::$app->session->setFlash('body', 'Ваше сообщение: ' . $model->body);


                $model->uploadFile = UploadedFile::getInstance($model, 'uploadFile'); // преобразовали файл из формы в объект

                if (isset($model->uploadFile)) {

                    $model->uploadFile->saveAs('uploads/order/' . $model->uploadFile->baseName . $model->uploadFile->extension);
                    echo 'файл записан';
                } 

                Yii::$app->mailer->compose('order', ['model' => $model])
                        ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                        ->setTo('shig-2011@mail.ru')
                        ->setSubject('Сайт. Заказать звонок-бронь. Санаторий МИД')
                        ->setHtmlBody("<b>$model->body</b>")
                        ->send();

                //      $model->uploadFile->saveAs('uploads/mail/' . $this->uploadFile->baseName . '.' . $this->uploadFile->extension);

                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка.');
            }
        }

        return $this->render('reservation', [
                    'model' => $model,
        ]);
    }

}
