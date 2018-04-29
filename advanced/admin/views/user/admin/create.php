<?php

use yii\helpers\Html;
use layui\widgets\Card;


/* @var $this yii\web\View */
/* @var $model common\models\admin\Admin */

$this->title = '添加用户';
$this->params['breadcrumbs'][] = ['label' => '系统用户', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create">

    <?php Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe654;"])?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php Card::end();?>

</div>
