<?php
namespace metronic;

use yii\web\AssetBundle;

class MetronicLoginAsset extends AssetBundle //需要继承AssetBundle类
{
    //参数
    public $sourcePath = '@metronic/assets';

    //定义资源包的css
    public $css = [
        "http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/uniform/css/uniform.default.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/uniform/css/uniform.default.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/css/components.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/css/plugins.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/css/login.min.css",
    ];

    //定义资源包的js
    public $js = [
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/jquery.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/jquery.blockui.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/uniform/jquery.uniform.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/scripts/app.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/scripts/login.min.js",
    ];

    //定义资源包的依赖
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
    ];
}