<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Заказать звонок';
$this->params['breadcrumbs'][] = '';
?>

<div class="container">

    <div class="site-contact text-center">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>    
</div>   

<div class="my-3 py-3 my-background-col text-center container-fluid">
    Мы очень рады что вы заинтересовались наши санаторием. 
    Санаторий-профилакторий «Курорт-парк «Союз» МИД России» одно из лучших мест 
    Подмосковья для оздоровления и отдыха. Заполните форму.
</div>  


<div class="container">


<?php if (Yii::$app->session->hasFlash('success')): ?>

        <div class="alert alert-success" role="alert">
            <p>111</p>
    <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>      
        <?php endif; ?>



<?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger" role="alert">
            <p>222</p>
        <?php Yii::$app->session->getFlash('error'); ?>
        </div>
        <?php endif; ?>


    <div class="row" style="font-size: 12px">
        <div class="col">

<?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'phone') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?=
            $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-5">{input}</div></div>',
            ])
            ?>

            <div class="form-group col-lg-3">
<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>


<?php ActiveForm::end(); ?>

        </div>
    </div>        

</div>
