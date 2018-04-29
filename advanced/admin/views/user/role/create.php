<?php

use yii\helpers\Html;
use layui\widgets\Card;


/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = '添加角色';
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe654;"])?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Card::end();?>

</div>
