<?php

use metronic\widgets\ActiveForm;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model common\models\user\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

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

    <?= $form->field($model, 'status')->textInput() ?>

    <?php ActiveForm::end(); ?>

</div>
