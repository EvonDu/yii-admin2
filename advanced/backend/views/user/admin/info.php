<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\admin\AdminInfo */

$this->title = "更新: $model->nickname";
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nickname, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="admin-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nickname')->textInput() ?>

        <?= $form->field($model, 'picture')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
