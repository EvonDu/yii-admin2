<?php
use yii\helpers\Url;
?>

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- 隐藏栏 -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"> </div>
            </li>
            <!-- 搜索栏 -->
            <li class="sidebar-search-wrapper">
                <form class="sidebar-search  " action="#" method="GET">
                    <a href="javascript:;" class="remove"#>
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                    </div>
                </form>
            </li>
            <!-- 仪表盘 -->
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">仪表盘</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="<?=Url::to(['site/index'])?>" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">首页</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 导航栏 -->
            <li class="heading">
                <h3 class="uppercase">功能导航</h3>
            </li>
            <?php foreach($menuItems as $menuItem):?>
                <!--权限判断-->
                <?php if(!empty($menuItem["auth"]) && !Yii::$app->user->can($menuItem["auth"])) break;?>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="<?= $menuItem["icon"]?>"></i>
                        <span class="title"><?= $menuItem["title"]?></span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <?php foreach($menuItem["items"] as $item):?>
                            <!--权限判断-->
                            <?php if(!empty($item["auth"]) && !Yii::$app->user->can($item["auth"])) continue;?>
                            <li class="nav-item  ">
                                <a href="<?= $item["url"]?>" class="nav-link ">
                                    <span class="title"><?= $item["title"]?></span>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>