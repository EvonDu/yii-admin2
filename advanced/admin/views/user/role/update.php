<?php

use yii\helpers\Html;
use layui\widgets\Card;

/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = "更新: $model->description";
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="auth-item-update">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe642;"])?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Card::end();?>

</div>
