<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- 顶部菜单 -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- 其他部分 -->
                <?php /*require "header-other.php";*/?>
                <!-- 用户部分 -->
                <li class="dropdown dropdown-user">
                    <!-- 用户信息部分 -->
                    <?php if (!Yii::$app->user->isGuest):?>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?=Yii::$app->user->identity->info->picture ?>" />
                            <span class="username username-hide-on-mobile"> <?=Yii::$app->user->identity->info->nickname ?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                    <?php endif;?>
                    <?php if (Yii::$app->user->isGuest):?>
                        <a href="<?=Url::to(['site/login'])?>" class="dropdown-toggle">
                            <span class="username username-hide-on-mobile" style="margin-right: 8px;"> 登录 </span>
                        </a>
                    <?php endif;?>
                    <!-- 用户下拉部分 -->
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?=Url::to(["user/admin/view",'id'=>Yii::$app->user->identity->id])?>">
                                <i class="icon-user"></i> 用户资料
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="<?=Url::to(["/site/change-password"])?>">
                                <i class="icon-lock"></i> 修改密码
                            </a>
                        </li>
                        <li>
                            <?= Html::beginForm(['/site/logout'], 'post',['id' => 'logout']) . Html::endForm(); ?>
                            <a href="javascript:document.getElementById('logout').submit();">
                                <i class="icon-key"></i> 登出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"> </div>