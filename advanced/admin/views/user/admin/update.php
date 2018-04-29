<?php

use yii\helpers\Html;
use layui\widgets\Card;

/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */

$this->title = '更新: '.$model->username;
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe642;"])?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Card::end();?>
</div>
