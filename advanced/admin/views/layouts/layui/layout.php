<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use admin\nav\Nav;
use backend\assets\AppAsset;
use layui\BeginnerAsset;

AppAsset::register($this);
BeginnerAsset::register($this);
Yii::$app->view->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
$nav = Nav::GetItems();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script>var navs = <?=json_encode((array)$nav)?></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        a,a:hover,a:focus{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="layui-layout layui-layout-admin" style="border-bottom: solid 5px #1aa094;">
    <?php require "elements/header.php";?>
    <?php require "elements/side.php";?>
    <div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
        <div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <cite>主页</cite>
                </li>
            </ul>
            <div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
                <div class="layui-tab-item layui-show">
                    <iframe src="<?=Url::to(['site/home'])?>"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php require "elements/footer.php";?>
    <?php require "elements/mobile.php";?>

    <!--锁屏模板 start-->
    <script type="text/template" id="lock-temp">
        <div class="admin-header-lock" id="lock-box">
            <?php if (!Yii::$app->user->isGuest):?>
            <div class="admin-header-lock-img">
                <img src="<?= Yii::$app->user->identity->info->picture ?>"/>
            </div>
            <div class="admin-header-lock-name" id="lockUserName"><?= Yii::$app->user->identity->info->nickname ?></div>
            <?php endif;?>
            <input type="text" class="admin-header-lock-input" value="输入密码解锁.." name="lockPwd" id="lockPwd" />
            <button class="layui-btn layui-btn-small" id="unlock">解锁</button>
        </div>
    </script>
    <!--锁屏模板 end -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php require "script/layout.php";?>