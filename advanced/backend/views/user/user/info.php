<?php

use yii\helpers\Html;
use metronic\widgets\ActiveForm;
use metronic\widgets\Portlet;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model common\models\admin\AdminInfo */

$this->title = "更新: $model->nickname";
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nickname, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="admin-update row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-pencil' ]);?>

    <div class="admin-form">

        <?php $form = ActiveForm::begin(['buttons'=>[
            Button::widget([
                "tag"=>Button::TAG_SUBMIT,
                "text"=>"保存",
                "icon"=>'glyphicon glyphicon-floppy-disk',
                "sbold"=>true,
                "color"=>Button::COLOR_BLUE,
            ]),
            Button::widget([
                "tag"=>Button::TAG_A,
                "text"=>'取消',
                "icon"=>'fa fa-mail-reply',
                'url'=>'javascript:window.history.back()',
                "sbold"=>true,
                "color"=>Button::COLOR_BLUE_HOKI,
                'outline'=>true,
            ]),
        ]]); ?>

        <?= $form->field($model, 'picture')->other('common\widgets\fileinput\ImageInput', [
            'template'=>'{input}',
            'uploadPath'=>yii\helpers\Url::to(['/upload/base64']),
            'uploadType'=>'base64'
        ]) ?>

        <?= $form->field($model, 'nickname')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>

        <?php ActiveForm::end(); ?>

    </div>

    <?php Portlet::end();?>

</div>
