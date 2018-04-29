<?php
namespace layui\widgets;

use layui\LayuiAsset;
use yii\base\Widget;
use layui\BeginnerAsset;

class LayuiWidget extends Widget
{
    //size
    const SIZE_NORMAL = "norm";
    const SIZE_LG = "lg";
    const SIZE_SM = "sm";
    const SIZE_XS = 'xs';
    //bootstrap class
    const THEME_NORMAL = "normal";
    const THEME_DEFAULT = "default";
    const THEME_PRIMARY = "primary";
    const THEME_WARM = "warm";
    const THEME_DANGER = "danger";
    const THEME_DISABLED = "disabled";

    public function run()
    {
        //加载必须资源包ImagesInputAsset资源包
        LayuiAsset::register($this->view);

        //调用父类初始化方法
        parent::run(); // TODO: Change the autogenerated stub
    }
}
?>