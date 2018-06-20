<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\admin\SignupForm */

use yii\helpers\Html;
use layui\widgets\ActiveForm;
use layui\widgets\Card;
use layui\widgets\Button;

$this->title = '用户注册';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe654;"])?>

    <p>请填写以下信息进行注册:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->submitButton(); ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php Card::end();?>

</div>
