<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use layui\widgets\Card;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => '权限管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-view">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe63c;"])?>

    <?php Blockquote::begin()?>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->name], [
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
