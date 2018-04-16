<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

//加载资源
AppAsset::register($this);
metronic\MetronicAsset::register($this);

//使用七牛存储的主题资源,如果要是想使用本地资源，下载下来放到web文件夹下读取即可。
$templetPath = "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic";
//$templetPath = Yii::getAlias('@web/resource/admin_templet/metronic');//Url::to('@web/resource/admin_templet/metronic', true);
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | User Login 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?= $templetPath ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $templetPath ?>/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class=" login">

<div class="menu-toggler sidebar-toggler"></div>
<div class="logo">
    <a href="index.html">
        <img src="http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/img/logo-big.png" alt="" /> </a>
</div>
<div class="content">
    <?= $content ?>
</div>
<div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>
<!--[if lt IE 9]>
<script src="<?= $templetPath ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?= $templetPath ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="<?= $templetPath ?>/assets/pages/scripts/login.min.js" type="text/javascript"></script>
</body>

</html>