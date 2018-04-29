<?php

use yii\helpers\Html;
use layui\widgets\ActiveForm;
use layui\widgets\Card;

/* @var $this yii\web\View */
/* @var $model common\models\admin\AdminInfo */

$this->title = "更新: $model->nickname";
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nickname, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="admin-update row">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe642;"])?>

    <div class="admin-form">

        <?php $form = ActiveForm::begin(['id' => 'form-info']); ?>

        <?= $form->field($model, 'picture')->other('common\widgets\fileinput\ImageInput', [
            'template'=>'{input}',
            'uploadPath'=>yii\helpers\Url::to(['/upload/base64']),
            'uploadType'=>'base64'
        ]) ?>

        <?= $form->field($model, 'nickname')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>

        <?= $form->submitButton(); ?>

        <?php ActiveForm::end(); ?>

    </div>

    <?php Card::end();?>

</div>
