<?php
namespace metronic\field;

use yii\helpers\Html;

/*
use metronic\field\CheckboxList;
<?= $form->field($model,"roles")->checkboxList(
    //选项
    [
        "CA"=>"California",
        "NV"=>"Nevada",
        "OR"=>"Oregon",
    ],
    //配置
    [
        // 类型：
        // TYPE_LIST：列显示
        // TYPE_INLINE：行显示
        'type'=>CheckboxList:TYPE_LIST
    ]
)?>
 */
class CheckboxList extends MetronicInputWidget
{
    //Type
    const TYPE_LIST = 'list';
    const TYPE_INLINE = 'inline';
    //Param
    public $type = self::TYPE_LIST;
    public $items = [];
    public $has = null;
    public $label = "";

    public function run()
    {
        //parent
        parent::run(); // TODO: Change the autogenerated stub

        //options
        $listOptions = [];
        switch ($this->type){
            case self::TYPE_LIST:{
                Html::addCssClass($listOptions,"md-checkbox-list");
                break;
            }
            case self::TYPE_INLINE:{
                Html::addCssClass($listOptions,"md-checkbox-inline");
                break;
            }
        }
        $boxOptions = ['class'=>'md-checkbox'];
        switch ($this->has){
            case self::HAS_INFO:{
                Html::addCssClass($listOptions,"has-info");
                break;
            }
            case self::HAS_ERROR:{
                Html::addCssClass($listOptions,"has-error");
                break;
            }
            case self::HAS_WARNING:{
                Html::addCssClass($listOptions,"has-warning");
                break;
            }
            case self::HAS_SUCCESS:{
                Html::addCssClass($listOptions,"has-success");
                break;
            }
        }

        //items
        $checkboxs = array();
        if(!empty($this->items)){
            foreach($this->items as $key=>$value){
                $id = uniqid();
                $name = Html::getInputName($this->model, $this->attribute)."[]";
                $inputOptions = ['id'=>$id, 'class'=>"md-check"];
                if(is_array($this->value) && array_search($key,$this->value) !== false)
                    $inputOptions["checked"] = "";
                $input = Html::input("checkbox",$name,$key,$inputOptions);
                $span[] = Html::tag("span");
                $span[] = Html::tag("span","",["class"=>"check"]);
                $span[] = Html::tag("span","",["class"=>"box"]);
                $label = Html::tag("label",implode("\n",$span)."\n$value",["class"=>"box","for"=>$id]);
                $checkboxs[] = Html::tag("div","$input\n$label",$boxOptions);
            }
        }

        //list
        $list = Html::tag("div",implode("\n",$checkboxs),$listOptions);

        //label
        $label = empty($this->label)?"":Html::tag("label",$this->label);

        //checkboxes
        $checkboxes = Html::tag("div","$label\n$list",["class"=>"form-md-checkboxes"]);

        //output
        echo $checkboxes;
    }
}
?>