<?php

use yii\helpers\Html;
use metronic\widgets\Portlet;

/* @var $this yii\web\View */
/* @var $model common\models\user\User */

$this->title = "更新: $model->username";
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="user-update row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-pencil' ]);?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Portlet::end();?>

</div>
