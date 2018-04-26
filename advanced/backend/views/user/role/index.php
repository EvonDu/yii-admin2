<?php

use yii\helpers\Html;
use metronic\widgets\Button;
use metronic\widgets\Portlet;
use metronic\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\auth\AuthItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '角色管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-index row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-th-list']);?>

    <div class="form-actions">
        <?= Button::widget([
            "tag"=>Button::TAG_A,
            "url"=>['create'],
            "text"=>'创建角色',
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

            'description:ntext',
            'rule_name',
            ['attribute' => 'created_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->created_at);},],
            ['attribute' => 'updated_at', 'value'=> function($model){return  date('Y-m-d H:i:s',$model->updated_at);},],

            [
                'class' => 'metronic\widgets\ActionColumn',
                'template' => '{view} {update} {delete} {assign}',
                'buttons' => [
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
