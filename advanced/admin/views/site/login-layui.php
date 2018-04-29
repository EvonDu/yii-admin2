<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\admin\LoginForm */

use yii\helpers\Html;
use layui\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form','pane'=>true]); ?>

<?= $form->field($model, 'username',["template"=>"{input}\n{error}\n{hint}"])->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password',["template"=>"{input}\n{error}\n{hint}"])->passwordInput() ?>

<?= $form->field($model, 'rememberMe',["template"=>"{input}\n{error}\n{hint}"])->checkbox(['title'=>'记住我',"lay-skin"=>"primary"]) ?>

<?= $form->submitButton(["style"=>"text-align:center"]) ?>

<?php ActiveForm::end(); ?>
