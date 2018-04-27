<?php
namespace metronic;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle //需要继承AssetBundle类
{
    public $sourcePath = '@metronic/assets';
    public $css = [
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/datatables/datatables.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css",
    ];
    public $js = [
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js",
        "http://oq6uyj3ku.bkt.clouddn.com/admin_templet/metronic/assets/pages/scripts/components-date-time-pickers.min.js",
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
        'metronic\MetronicAsset'
    ];
}