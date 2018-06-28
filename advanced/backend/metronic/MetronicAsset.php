<?php
namespace metronic;

use yii\web\AssetBundle;

class MetronicAsset extends AssetBundle //需要继承AssetBundle类
{
    //参数
    public $sourcePath = '@metronic/assets';

    //定义资源包的css
    public $css = [
        //调整
        'css/main.css',

        //文字图标库
        //"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css",

        //布局
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/css/components.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/css/plugins.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/layout/css/layout.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/layout/css/themes/darkblue.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/layout/css/custom.min.css",

        //弹窗
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css",
        //"http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css",

        //表格
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/datatables/datatables.min.css",
    ];

    //定义资源包的js
    public $js = [
        //导航
        'js/nav.js',
        'js/jquery-compatibility.js',

        //布局
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/scripts/app.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/global/scripts/quick-sidebar.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/layouts/layout/scripts/layout.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js",

        //弹窗
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js",
    ];

    //定义资源包的依赖
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
    ];
}