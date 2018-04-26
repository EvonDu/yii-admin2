<?php

use yii\helpers\Html;
use metronic\widgets\Button;
use metronic\widgets\Portlet;
use metronic\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\user\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-th-list']);?>

    <div class="form-actions">
        <?= Button::widget([
            "tag"=>Button::TAG_A,
            "url"=>['signup'],
            "text"=>'创建用户',
            "icon"=>"fa fa-plus",
            "sbold"=>true,
            "color"=>Button::COLOR_GREEN
        ])?>
    </div><br>

    <?= $this->render('_search', ['model' => $searchModel]); ?>

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
                'class' => 'metronic\widgets\ActionColumn',
                'template' => '{view} {info} {delete}',
                //'template' => '{view} {info} {delete} {assign}',
                'buttons' => [
                    'info' => function ($url, $model, $key) {
                        $button = Button::widget([
                            "tag"=>Button::TAG_A,
                            "url"=>$url,
                            "text"=>Yii::t('yii', 'Update'),
                            "icon"=>"glyphicon glyphicon-pencil",
                            "sbold"=>true,
                            "circle"=>true,
                            "outline"=>true,
                            "color"=>Button::COLOR_GREEN,
                            "size"=>Button::SIZE_EXTRA_SMALL,
                            "options"=>[
                                'title' => Yii::t('yii', 'Update'),
                                'aria-label' => Yii::t('yii', 'Update'),
                                'data-pjax' => '0',
                            ]
                        ]);
                        return $button;
                    },
                    'assign' => function ($url, $model, $key) {
                        $button = Button::widget([
                            "tag"=>Button::TAG_A,
                            "url"=>$url,
                            "text"=>'角色',
                            "icon"=>"glyphicon glyphicon-user",
                            "sbold"=>true,
                            "circle"=>true,
                            "outline"=>true,
                            "color"=>Button::COLOR_PURPLE_MINT,
                            "size"=>Button::SIZE_EXTRA_SMALL,
                            "options"=>[
                                'title' => '角色',
                                'aria-label' => '角色',
                                'data-pjax' => '0',
                            ]
                        ]);
                        return $button;
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Portlet::end();?>
</div>
