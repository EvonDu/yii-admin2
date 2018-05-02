<?php

use yii\helpers\Html;
use layui\widgets\GridView;
use layui\widgets\Card;
use layui\widgets\Button;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $searchModel common\models\auth\AuthItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '权限管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-index">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe62d;"])?>

    <?php Blockquote::begin()?>

    <?= Button::widget([
        "text"=>"添加",
        "icon"=>"&#xe654;",
        "size"=>Button::SIZE_SM,
        "tag"=>Button::TAG_A,
        "url"=>['create'],
    ]) ?>

    <?php Blockquote::end();?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'description:ntext',
            'name',
            'rule_name',
            ['attribute' => 'created_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->created_at);},],
            ['attribute' => 'updated_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->updated_at);},],

            ['class' => 'layui\widgets\ActionColumn'],
        ],
    ]); ?>

    <?php Card::end();?>

</div>
