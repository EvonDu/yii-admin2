<?php
use yii\helpers\Html;
use layui\widgets\Card;

$this->title = '主页';
?>
<style>
    .x-admin-backlog-body{
        display: block;
        padding: 10px 15px;
        background-color: #f8f8f8;
        color: #999;
        border-radius: 2px;
        transition: all .3s;
        -webkit-transition: all .3s;
    }
    .x-admin-backlog-body h3 {
        padding-bottom: 10px;
        font-size: 12px;
    }
    .x-admin-backlog-body p cite {
        font-style: normal;
        font-size: 30px;
        font-weight: 300;
        color: #009688;
    }
</style>

<?php Card::begin(["title"=>'数据统计',"icon"=>"&#xe629;"])?>
<div carousel-item="">
    <ul class="layui-row layui-col-space10 layui-this">
        <li class="layui-col-xs3">
            <a href="javascript:;" class="x-admin-backlog-body">
                <h3>管理员</h3>
                <p><cite><?= $data["admin_count"]?></cite></p>
            </a>
        </li>
        <li class="layui-col-xs3">
            <a href="javascript:;" class="x-admin-backlog-body">
                <h3>用户数</h3>
                <p><cite><?= $data["user_count"]?></cite></p>
            </a>
        </li>
        <li class="layui-col-xs3">
            <a href="javascript:;" class="x-admin-backlog-body">
                <h3>角色数</h3>
                <p><cite><?= $data["role_count"]?></cite></p>
            </a>
        </li>
        <li class="layui-col-xs3">
            <a href="javascript:;" class="x-admin-backlog-body">
                <h3>权限数</h3>
                <p><cite><?= $data["auth_count"]?></cite></p>
            </a>
        </li>
    </ul>
</div>
<?php Card::end();?>

<hr>

<?php Card::begin(["title"=>'系统信息',"icon"=>"&#xe614;"])?>
<table class="layui-table">
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
        <td><?= $_SERVER['SERVER_PORT']?>S</td></tr>
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
<?php Card::end();?>
