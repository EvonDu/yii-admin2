<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\admin\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '用户登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h3 class="form-title font-green"><?= Html::encode($this->title) ?></h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>

    <p>请填写以下登录信息:</p>

    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'login-form']]); ?>

        <div class="form-group">
            <?= $form->field($model, 'username',['labelOptions' =>['class' => 'control-label visible-ie8 visible-ie9']])
                ->textInput(['autofocus' => true,'class'=>'form-control form-control-solid placeholder-no-fix',"autocomplete"=>"off","placeholder"=>$model->getAttributeLabel('username')]) ?>
        </div>

        <div class="form-group">
            <?= $form->field($model, 'password',['labelOptions' =>['class' => 'control-label visible-ie8 visible-ie9']])
                ->passwordInput(['class'=>'form-control form-control-solid placeholder-no-fix',"autocomplete"=>"off","placeholder"=>$model->getAttributeLabel('password')]) ?>
        </div>

        <div class="form-actions">
            <?= $form->field($model, 'rememberMe')->checkbox(['class'=>'rememberme check','style'=>'display: inline;']) ?>
            <?= Html::submitButton('登录', ['class' => 'btn green uppercase', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
