<?php

use yii\helpers\Html;
use metronic\widgets\Portlet;


/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */

$this->title = '添加用户';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create row">

    <?php Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-plus' ]);?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Portlet::end();?>

</div>
