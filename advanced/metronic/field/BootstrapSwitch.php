<?php
namespace metronic\field;

use yii\helpers\Html;
use metronic\SwitchAsset;

/*
use metronic\field\BootstrapSwitch;
<?= $form->field($model,"username")->bootstrapSwitch([
    // 按钮颜色设置
    "onColor"=>BootstrapSwitch::CLASS_PRIMARY,
    "offColor"=>BootstrapSwitch::CLASS_DEFAULT,
    // 设置大小
    "size"=>BootstrapSwitch::SIZE_NORMAL,
    // 是否可输入
    "readonly"=>false,
    // 按钮内容设置
    "onText"=>"ON",
    "offText"=>"OFF"
])?>
 */
class BootstrapSwitch extends MetronicInputWidget
{
    public $onClass = self::CLASS_PRIMARY;
    public $offClass = self::CLASS_DEFAULT;
    public $size = self::SIZE_NORMAL;
    public $readonly = false;
    public $onText = "ON";
    public $offText = "OFF";

    public function run()
    {
        //Parent
        parent::run(); // TODO: Change the autogenerated stub

        //Load Assets
        SwitchAsset::register($this->view);

        //Options
        $options = [
            "class"=>"make-switch",
            "data-off-color"=>$this->offClass,
            "data-on-color"=>$this->onClass,
            "data-size"=>$this->size,
            "data-off-text"=>$this->offText,
            "data-on-text"=>$this->onText,
        ];
        if($this->value)
            $options["checked"] = "";
        if($this->readonly)
            $options["readonly"] = "";

        //Input
        $input = Html::input("checkbox",$this->name,$this->value,$options);

        //Output
        echo $input;
    }
}
?>