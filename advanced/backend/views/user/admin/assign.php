<?php

use yii\helpers\Html;
use metronic\widgets\ActiveForm;
use metronic\widgets\Portlet;
use metronic\widgets\Button;


/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = '分配角色';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-user' ]);?>

    <div class="role-assign-form">

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

        <?= $form->field($model, 'roles')->checkboxList($model->list) ?>

        <?php ActiveForm::end(); ?>

    </div>

    <?php Portlet::end();?>

</div>