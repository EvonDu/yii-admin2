<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = '分配角色';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="auth-assign-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'roles')->checkboxList($model->list) ?>

        <div class="form-group">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>