<?php

use yii\helpers\Html;
use layui\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->submitButton(); ?>

    <?php ActiveForm::end(); ?>

</div>
