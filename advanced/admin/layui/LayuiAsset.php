<?php
namespace layui;

use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle //需承AssetBundle类
{
    //参数
    public $sourcePath = '@layui/assets';
    //定义资源包的css
    public $css = [
        "layui/css/layui.css",
    ];
    //定义资源包的js
    public $js = [
        "layui/layui.js",
        "main.js",
    ];
    //定义资源包的依赖
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',         //依赖Bootstrap
        //'yii\bootstrap\BootstrapPluginAsset',   //依赖BootstrapJs
        'yii\web\JqueryAsset',                    //依赖jquery
    ];
}