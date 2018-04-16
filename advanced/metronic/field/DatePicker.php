<?php
namespace metronic\field;

use yii\helpers\Html;
use metronic\DatePickerAsset;
use metronic\widgets\Button;

/*
<?= $form->field($model,"username")->datePicker([
    // 时间格式
    "format" => "yyyy-mm-dd",
    "readonly "=>false,
    // 是否为建议样式，即不是InputGroup
    "simple"=>false,
    // 为InputGroup时的样式配置
    "buttonOptions" => [
        "icon"=>"fa fa-calendar",
        "color"=>\metronic\widgets\Button::COLOR_DEFAULT
    ]
])?>
 */
class DatePicker extends MetronicInputWidget
{
    /**
     * @var string
     */
    public $format = "yyyy-mm-dd";
    public $readonly = false;
    public $simple = false;
    public $buttonOptions = [
        "icon"=>"fa fa-calendar",
        "color"=>Button::COLOR_DEFAULT
    ];

    public function run()
    {
        //Parent
        parent::run(); // TODO: Change the autogenerated stub

        //Load Assets
        DatePickerAsset::register($this->view);

        //Html
        if($this->simple)
            $datePicker = $this->renderInput();
        else
            $datePicker = $this->renderInputGroup();

        //Output
        echo $datePicker;
    }

    public function renderInput(){
        //Options
        $options = [
            "id"=>$this->id,
            'class'=>'form-control form-control-inline input-medium date-picker',
            "data-date-format" => $this->format,
        ];
        if($this->readonly)
            $options["readonly"]="";

        //Input
        $input = Html::input("text",$this->name,$this->value,$options);

        //Return
        return $input;
    }

    public function renderInputGroup(){
        //Options
        $options = [
            'class'=>'input-group input-medium date date-picker',
            "data-date-format" => $this->format,
        ];

        //InputOptions
        $inputOptions = [
            "id"=>$this->id,
            'class'=>'form-control'
        ];
        if($this->readonly)
            $inputOptions["readonly"]="";

        //Html
        $input = Html::input("text",$this->name,$this->value,$inputOptions);
        $btn = Button::widget($this->buttonOptions);
        $span = Html::tag("span",$btn,['class'=>'input-group-btn']);
        $group = Html::tag("div","$input\n$span",$options);

        //Return
        return $group;
    }
}
?>