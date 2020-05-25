<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
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
    
    public function actionReservation() {

        $model = new ContactForm();


        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {
                
               
                Yii::$app->session->setFlash('success', 'Данные приняты');
               
                Yii::$app->mailer->compose('order', ['model'=>$model])
                        ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                        ->setTo('zolotovdmitriy2013@gmail.ru')
                        ->setSubject('Заказать звонок-бронь. Санаторий МИД')
                        ->send();

                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('reservation', [
                    'model' => $model,
        ]);
    }

}
