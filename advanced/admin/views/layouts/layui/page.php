<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use layui\LayuiAsset;
use layui\widgets\Breadcrumbs;
use layui\widgets\Button;

AppAsset::register($this);
LayuiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script>var navs = null</script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        html,body{
            background-color: #f2f2f2;
        }
        #page-header{
            display: flex;
            justify-content: space-between;
            align-items:center;
            /*border-bottom: #999 solid 1px;*/
            /*border-bottom: #1AA094 solid 1px;*/
            box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
            height: 36px;
            line-height: 36px;
            padding: 0px 18px;
            background-color: white;
        }
        #page-content{
            margin-top: 12px;
        }
        a,a:hover,a:focus{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div id="page-header">
    <div>
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>
    </div>
    <div>
        <a href="javascript:if(document.referrer != '<?=\yii\helpers\Url::home(true)?>') window.history.back();"><i class="layui-icon">&#xe65c;</i></a>
        <a href="javascript:location.replace(location.href);"><i class="layui-icon layui-icon-refresh-3"></i></a>
    </div>
</div>

<div id="page-content" class="layui-fluid">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
