<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use metronic\widgets\Portlet;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => '权限管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-view row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-eye-open','actions'=> [
        ["text"=>"更新", "icon"=>'glyphicon glyphicon-pencil', "color"=>Button::COLOR_GREEN, "url"=>['update', 'id' => $model->name]],
        ["text"=>"删除" ,"icon"=>'glyphicon glyphicon-trash', "color"=>Button::COLOR_RED, "url"=>['delete', 'id' => $model->name], 'options'=>[
            'data'=>[
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ]
        ]],
        ["text"=>"返回", "icon"=>'fa fa-mail-reply', "color"=>Button::COLOR_BLUE_HOKI, "url"=>"javascript:window.history.back()"],
    ]]);?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'type',
            'description:ntext',
            'rule_name',
            'data',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Portlet::end();?>

</div>
