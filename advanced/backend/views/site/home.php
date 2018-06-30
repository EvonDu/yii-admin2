<?php
    use metronic\widgets\Portlet;

    $this->title = '仪表盘';
    $this->params['breadcrumbs'][] = $this->title;
?>

<h3 class="page-title">
    仪表盘
    <small>dashboard &amp; statistics</small>
</h3>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?= $data["admin_count"]?>"><?= $data["admin_count"]?></span>
                </div>
                <div class="desc"> 管理员 </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?= $data["user_count"]?>"><?= $data["user_count"]?></span>
                </div>
                <div class="desc"> 用户数 </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?= $data["role_count"]?>"><?= $data["role_count"]?></span>
                </div>
                <div class="desc"> 角色数 </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?= $data["auth_count"]?>"><?= $data["auth_count"]?></span>
                </div>
                <div class="desc"> 权限数 </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <?php Portlet::begin(["title"=>"服务器信息", "icon"=>'glyphicon glyphicon-cloud', "col"=>12]);?>
    <table class="table table-hover">
        <tbody>
        <tr>
            <th>操作系统</th>
            <td><?= PHP_OS ?></td></tr>
        <tr>
            <th>YII</th>
            <td>2.0.15</td></tr>
        <tr>
            <th style="width: 25%">PHP版本</th>
            <td><?= PHP_VERSION; ?></td></tr>
        <tr>
            <th>服务器地址</th>
            <td><?= $_SERVER['HTTP_HOST']?></td></tr>
        <tr>
            <th>访问IP</th>
            <td><?= $_SERVER['REMOTE_ADDR']?></td></tr>
        <tr>
            <th>访问端口</th>
            <td><?= $_SERVER['SERVER_PORT']?></td></tr>
        <tr>
            <th>POST限制</th>
            <td><?= ini_get('post_max_size')?></td></tr>
        <tr>
            <th>上传附件限制</th>
            <td><?= ini_get('upload_max_filesize') ?></td></tr>
        <tr>
            <th>执行时间限制</th>
            <td><?= ini_get('max_execution_time')?>S</td></tr>
        <tr>
            <th>统计时间</th>
            <td><?= date("Y-m-d H:i:s",time())?></td></tr>
        <tr>
            <th>浏览器</th>
            <td><?= $_SERVER['HTTP_USER_AGENT']?></td></tr>
        </tbody>
    </table>
    <?php Portlet::end();?>
</div>