<?php
namespace metronic;

use yii\web\AssetBundle;

class Select2Asset extends AssetBundle //需要继承AssetBundle类
{
    public $sourcePath = '@metronic/assets';
    public $css = [
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/select2/css/select2.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css",
    ];
    public $js = [
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/select2/js/select2.full.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/scripts/components-select2.min.js",
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
        'metronic\MetronicAsset'
    ];
}