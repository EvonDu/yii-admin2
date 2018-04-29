<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use layui\widgets\ActiveForm;
use layui\widgets\Card;
use layui\widgets\Button;

$this->title = '修改密码';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup row">


    <?php Card::begin(["title"=>"请填写以下信息：","icon"=>"&#xe650;"])?>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'password_new')->passwordInput() ?>

            <?= $form->field($model, 'password_confirm')->passwordInput() ?>

            <?= $form->submitButton();?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php Card::end();?>

</div>
