<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use layui\widgets\Card;
use layui\widgets\Button;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-view">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe63c;"])?>

    <?php Blockquote::begin()?>

    <div class="layui-btn-group">
        <?= Button::widget([
            "text"=>'更新',
            "icon"=>'&#xe642;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_NORMAL,
            "url"=>['update', 'id' => $model->name],
        ]) ?>
        <?= Button::widget([
            "text"=>'删除',
            "icon"=>'&#xe640;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_DANGER,
            "url"=>['delete', 'id' => $model->name],
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
            'name',
            'type',
            'description:ntext',
            'rule_name',
            'data',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Card::end();?>

</div>
