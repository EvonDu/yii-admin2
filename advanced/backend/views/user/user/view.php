<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use metronic\widgets\Portlet;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model common\models\user\User */

$this->title = $model->info->nickname;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-eye-open','actions'=> [
        ["text"=>"更新", "icon"=>'glyphicon glyphicon-pencil', "color"=>Button::COLOR_GREEN, "url"=>['info', 'id' => $model->id]],
        ["text"=>"删除" ,"icon"=>'glyphicon glyphicon-trash', "color"=>Button::COLOR_RED, "url"=>['delete', 'id' => $model->id], 'options'=>[
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
            'id',
            'username',
            'userInfo.nickname',
            'userInfo.phone',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Portlet::end();?>

</div>
