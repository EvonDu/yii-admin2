<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use layui\widgets\Card;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */

$this->title = $model->info->nickname;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">
    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe63c;"])?>

    <?php Blockquote::begin()?>

    <p>
        <?= Html::a('更新', ['info', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php Blockquote::end()?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'userInfo.picture',
                'format' => 'raw',
                'value' => function($model){return Html::img($model->userInfo->picture,['style'=>'width: 100px;']);}
            ],
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

    <?php Card::end();?>

</div>
