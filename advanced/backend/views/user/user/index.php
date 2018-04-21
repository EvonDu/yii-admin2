<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\user\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建用户', ['signup'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            'status',
            ['attribute' => 'created_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->created_at);},],
            ['attribute' => 'updated_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->updated_at);},],

            [
                'class' => 'yii\grid\ActionColumn',
                //'template' => '{view} {update} {delete} {assign}',
                'template' => '{view} {info} {delete} {assign}',
                'buttons' => [
                    'info' => function ($url, $model, $key) {
                        return !empty($model)?Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => '用户信息'] ) : '';
                    },
                    'assign' => function ($url, $model, $key) {
                        return !empty($model)?Html::a('<span class="glyphicon glyphicon-user"></span>', $url, ['title' => '分配角色'] ) : '';
                    },
                ],
            ],
        ],
    ]); ?>
</div>
