<?php
namespace layui;

use yii\web\AssetBundle;

class BeginnerAsset extends AssetBundle //需要继承AssetBundle类
{
    //参数
    public $sourcePath = '@layui/assets';
    //定义资源包的css
    public $css = [
        "beginner/plugins/font-awesome/css/font-awesome.min.css",
        "beginner/plugins/layui/css/layui.css",
        "beginner/css/global.css",
    ];
    //定义资源包的js
    public $js = [
        "beginner/plugins/layui/layui.js",
        "beginner/src.js",
        "beginner/js/index.js",
        "beginner/main.js"
    ];
    //定义资源包的依赖
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
    ];
}