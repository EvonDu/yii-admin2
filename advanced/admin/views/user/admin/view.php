<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use layui\widgets\Card;
use layui\widgets\Button;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */

$this->title = $model->info->nickname;
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">
    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe63c;"])?>

    <?php Blockquote::begin()?>

    <div class="layui-btn-group">
        <?= Button::widget([
            "text"=>'更新',
            "icon"=>'&#xe642;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_NORMAL,
            "url"=>['info', 'id' => $model->id],
        ]) ?>
        <?= Button::widget([
            "text"=>'删除',
            "icon"=>'&#xe640;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_DANGER,
            "url"=>['delete', 'id' => $model->id],
            "options"=>[
                'data' => [
                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]
        ]) ?>
    </div>

    <?php Blockquote::end()?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'adminInfo.picture',
                'format' => 'raw',
                'value' => function($model){return isset($model->adminInfo->picture)?Html::img(yii\helpers\Url::to(['/upload/get','src'=>$model->adminInfo->picture]),['style'=>'width: 100px;']):null;}
            ],
            'username',
            'adminInfo.nickname',
            'adminInfo.phone',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Card::end();?>

</div>
