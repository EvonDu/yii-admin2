<?php

use yii\helpers\Html;
use metronic\widgets\Portlet;


/* @var $this yii\web\View */
/* @var $model common\models\user\User */

$this->title = '添加用户';
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-plus' ]);?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Portlet::end();?>

</div>
