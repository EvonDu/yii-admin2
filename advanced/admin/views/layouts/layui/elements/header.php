<?php
use yii\helpers\Html;
?>

<div class="layui-header header header-demo">
    <div class="layui-main">
        <div class="admin-login-box">
            <a class="logo" style="left: 0;" href="http://beginner.zhengjinfan.cn/demo/beginner_admin/">
                <span style="font-size: 22px;">YiiAdmin2</span>
            </a>
            <div class="admin-side-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="admin-side-full">
                <i class="fa fa-life-bouy" aria-hidden="true"></i>
            </div>
        </div>
        <ul class="layui-nav admin-header-item">
            <li class="layui-nav-item" id="video1">
                <a href="javascript:;">百度搜索</a>
            </li>
            <li class="layui-nav-item" id="pay">
                <a href="javascript:;">通知信息</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">浏览网站</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">清除缓存</a>
            </li>
            <?php if (!Yii::$app->user->isGuest):?>
                <li class="layui-nav-item">
                    <a href="javascript:;" class="admin-header-user">
                        <img src="<?= yii\helpers\Url::to(['/upload/get','src'=>Yii::$app->user->identity->info->picture]) ?>" />
                        <span><?= Yii::$app->user->identity->info->nickname ?></span>
                    </a>
                    <dl class="layui-nav-child">
                        <!--<dd>
                            <a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 个人信息</a>
                        </dd>
                        <dd>
                            <a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 设置</a>
                        </dd>-->
                        <dd id="change-password">
                            <a href="javascript:;"><i class="fa fa-key" aria-hidden="true"></i> 修改密码</a>
                        </dd>
                        <dd id="lock">
                            <a href="javascript:;">
                                <i class="fa fa-lock" aria-hidden="true" style="padding-right: 3px;padding-left: 1px;"></i> 锁屏 (Alt+L)
                            </a>
                        </dd>
                        <dd>
                            <?= Html::beginForm(['/site/logout'], 'post',['id' => 'logout']) . Html::endForm(); ?>
                            <a href="javascript:document.getElementById('logout').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                        </dd>
                    </dl>
                </li>
            <?php endif;?>
        </ul>
        <ul class="layui-nav admin-header-item-mobile">
            <li class="layui-nav-item">
                <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
            </li>
        </ul>
    </div>
</div>