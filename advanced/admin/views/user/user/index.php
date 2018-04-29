<?php

use yii\helpers\Html;
use layui\widgets\GridView;
use layui\widgets\Card;
use layui\widgets\Button;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $searchModel common\models\admin\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-index">
    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe62d;"])?>

    <?php Blockquote::begin()?>

    <?= Button::widget([
            "text"=>"添加",
            "icon"=>"&#xe608;",
            "size"=>Button::SIZE_SM,
            "tag"=>Button::TAG_A,
            "url"=>['signup'],
        ]) ?>

    <?php Blockquote::end();?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',

            [
                'class' => 'layui\widgets\ActionColumn',
                //'template' => '{view} {info} {delete} {assign}',
                'template' => '{view} {info} {delete}',
                'buttons' => [
                    'info' => function ($url, $model, $key) {
                        return Button::widget([
                            "text"=>Yii::t('yii', 'Update'),
                            //"icon"=>"&#xe642;",
                            "size"=>Button::SIZE_SM,
                            "theme"=>Button::THEME_NORMAL,
                            "tag"=>Button::TAG_A,
                            "url"=>$url,
                            "options"=>[
                                'title' => Yii::t('yii', 'Update'),
                                'aria-label' => Yii::t('yii', 'Update'),
                                'data-pjax' => '0',
                            ],
                        ]);
                    },
                    'assign' => function ($url, $model, $key) {
                        return Button::widget([
                            "text"=>"角色",
                            //"icon"=>"&#xe642;",
                            "size"=>Button::SIZE_SM,
                            "theme"=>Button::THEME_PRIMARY,
                            "tag"=>Button::TAG_A,
                            "url"=>$url,
                            "options"=>[
                                'title' => "角色",
                                'aria-label' => "角色",
                                'data-pjax' => '0',
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Card::end();?>
</div>
