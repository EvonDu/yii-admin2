<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use admin\nav\Nav;
use admin\assets\AppAsset;
use layui\BeginnerLoginAsset;

AppAsset::register($this);
BeginnerLoginAsset::register($this);
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
<body class="beg-login-bg">
<?php $this->beginBody() ?>

<div class="beg-login-box">
    <header>
        <h1>后台登录</h1>
    </header>
    <div class="beg-login-main">
        <?= $content ?>
    </div>
    <footer>
        <p>Beginner © www.zhengjinfan.cn</p>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
