<?php
namespace layui\field;

use yii\helpers\Html;
use layui\widgets\LayuiWidget;

class LayuiInputWidget extends LayuiWidget
{
    public $model;
    public $attribute;
    public $id;
    public $name;
    public $value;

    public function init()
    {
        $this->name = Html::getInputName($this->model, $this->attribute);
        $this->id = Html::getInputId($this->model, $this->attribute);
        $this->value = Html::getAttributeValue($this->model,$this->attribute);

        parent::init(); // TODO: Change the autogenerated stub
    }
}