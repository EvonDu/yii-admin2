<?php
namespace beginner;

use yii\web\AssetBundle;

class BeginnerAsset extends AssetBundle //需要继承AssetBundle类
{
    //参数
    public $sourcePath = '@beginner/assets';
    //定义资源包的css
    public $css = [
        "plugins/layui/css/layui.css",
        "css/global.css",
        "plugins/font-awesome/css/font-awesome.min.css",
    ];
    //定义资源包的js
    public $js = [
        //"datas/nav.js",
        "src.js",
        "plugins/layui/layui.js",
        "js/index.js",
        "main.js"
    ];
    //定义资源包的依赖
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        //'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                  //依赖jquery
    ];
}