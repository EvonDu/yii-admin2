<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

//加载资源
AppAsset::register($this);
metronic\MetronicLoginAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="shortcut icon" href="favicon.ico" />
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body class="login">
        <?php $this->beginBody() ?>

        <div class="menu-toggler sidebar-toggler"></div>
        <div class="logo">
            <a href="index.html"> <img src="http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <div class="content">
            <?= $content ?>
        </div>
        <div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>
        
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>