<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\user\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use metronic\widgets\Portlet;
use metronic\widgets\Button;

$this->title = '用户注册';
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-plus']);?>

    <p>请填写以下信息进行注册:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Button::widget(["text"=>'注册',"tag"=>Button::TAG_SUBMIT, "icon"=>"glyphicon glyphicon-plus", "color"=>Button::COLOR_BLUE,]);?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php Portlet::end();?>

</div>
