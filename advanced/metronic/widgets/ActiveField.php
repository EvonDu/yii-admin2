<?php
namespace metronic\widgets;

use metronic\field\CheckboxList;
use metronic\field\CheckboxTree;
use metronic\field\DatePicker;
use metronic\field\BootstrapSwitch;
use metronic\field\Editor;
use metronic\field\Select2;
use metronic\field\TagsInput;
use metronic\field\Other;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ActiveField extends \yii\widgets\ActiveField {
    /**
     * @param $widget
     * @param array $options
     * @return $this
     */
    public function other($widget,$options = []){
        $otherOptions = [
            'widget'=>$widget ,
            'model' => $this->model,
            'attribute' => $this->attribute,
            'options'=>$options
        ];
        $this->parts['{input}'] = Other::widget($otherOptions);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function datePicker($options = []){
        $options = array_merge($options, ['model' => $this->model, 'attribute' => $this->attribute]);
        $this->parts['{input}'] = DatePicker::widget($options);
        return $this;
    }

    /**
     * @param $items
     * @param array $options
     * @return $this
     */
    public function select2($items, $options = []){
        $options = array_merge($options, ['items'=>$items,'model' => $this->model, 'attribute' => $this->attribute]);
        $this->parts['{input}'] = Select2::widget($options);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function bootstrapSwitch($options = []){
        $options = array_merge($options, ['model' => $this->model, 'attribute' => $this->attribute]);
        $this->parts['{input}'] = BootstrapSwitch::widget($options);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function tagsInput($options = []){
        $options = array_merge($options, ['model' => $this->model, 'attribute' => $this->attribute]);
        $this->parts['{input}'] = TagsInput::widget($options);
        return $this;
    }

    /**
     * @param array $items
     * @param array $options
     * @return $this
     */
    public function checkboxList($items, $options = [])
    {
        $options = array_merge($options, ['items'=>$items,'model' => $this->model, 'attribute' => $this->attribute]);
        $this->parts['{input}'] = CheckboxList::widget($options);
        return $this;
    }

    /**
     * @param $items
     * @param array $options
     * @return $this
     */
    public function checkboxTree($items,$options = []){
        $config = [
            'items'=>$items,
            'model' => $this->model,
            'attribute' => $this->attribute,
            'options' => $options
        ];
        $this->parts['{input}'] = CheckboxTree::widget($config);
        return $this;
    }

    public function editor($options = []){
        $config = [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'options' => $options
        ];
        $this->parts['{input}'] = Editor::widget($config);
        return $this;
    }
}
