<?php

use yii\helpers\Html;
use layui\widgets\ActiveForm;
use layui\widgets\Card;
use layui\widgets\Button;


/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = '分配角色';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create row">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe612;"])?>

    <div class="auth-assign-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'roles')->checkboxList($model->list) ?>

        <?= $form->submitButton() ?>

        <?php ActiveForm::end(); ?>

    </div>

    <?php Card::end();?>

</div>