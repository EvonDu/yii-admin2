<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//加载资源
AppAsset::register($this);
metronic\MetronicAsset::register($this);

//设置菜单
require Yii::getAlias('@backend')."/nav/Nav.php";
$menuItems=backend\nav\Nav::GetItems();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--<link rel="shortcut icon" href="favicon.ico" />-->
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <?php $this->beginBody() ?>

        <!-- 页头 -->
        <?php require "elements/header.php";?>
        <!-- 页面主体 -->
        <div class="page-container">
            <!-- 侧边栏 -->
            <?php require "elements/sidebar.php";?>
            <!-- 页面内容 -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?= Breadcrumbs::widget([ 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?><?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
        </div>
        <!-- 页脚-->
        <?php require "elements/footer.php";?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>