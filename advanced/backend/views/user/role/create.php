<?php

use yii\helpers\Html;
use metronic\widgets\Portlet;


/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItem */

$this->title = '添加角色';
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-plus' ]);?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Portlet::end();?>

</div>
