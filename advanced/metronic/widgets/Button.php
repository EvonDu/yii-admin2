<?php
namespace metronic\widgets;

use yii\helpers\Html;

/*
use metronic\widgets\Button
<?= Button::widget([
    // tag类型，支持a、submit、button(默认)
    'tag'=>Button::TAG_A,
    // tag为TAG_A时，的url地址
    'url'=>['create'],
    'text'=>'SUCCESS',
    'icon'=>'fa fa-plus',
    'color'=>Button::COLOR_GREEN,
    'size'=>Button::SIZE_NORMAL,
    // 是否加粗
    'sbold'=>true,
    // 是否使用描边样式
    'outline'=>false,
    // 是否可用
    'disabled'=>true,
    // 是否使用圆角
    'circle'=>false,
    // 是否为icon按钮
    'iconOnly'=>false,
    // 是否使用Bootstrap样式
    'bootstrap'=>false,
    // Bootstrap样式时生效，用于指定类型：info、danger、primary、warning、success
    'type'=>Button::TYPE_PRIMARY
])?>
 */
class Button extends MetronicWidget
{
    //tag
    const TAG_A = "a";
    const TAG_SUBMIT = "submit";
    const TAG_BUTTON = "button";
    //type
    const TYPE_INFO = "info";
    const TYPE_DANGER = "danger";
    const TYPE_DEFAULT = "default";
    const TYPE_PRIMARY = "primary";
    const TYPE_WARNING = "warning";
    const TYPE_SUCCESS = "success";

    //params
    public $text = '';
    public $icon = '';
    public $url = 'javascript:;';
    public $tag = self::TAG_BUTTON;
    public $color = self::COLOR_BLUE;
    public $size = self::SIZE_NORMAL;
    public $type = self::TYPE_PRIMARY;
    public $stripe = null;
    public $bootstrap = false;
    public $circle = false;
    public $disabled = false;
    public $outline = false;
    public $sbold = false;
    public $block = false;
    public $iconOnly = false;
    public $options = [];

    /**
     * @return string
     */
    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub

        Html::addCssClass($this->options, "btn");
        if ($this->bootstrap) {
            Html::addCssClass($this->options, "btn-$this->type");
        } else {
            Html::addCssClass($this->options, $this->color);
            if(!empty($this->stripe))
                Html::addCssClass($this->options, "$this->stripe-stripe");
            if ($this->outline)
                Html::addCssClass($this->options, "btn-outline");
            if ($this->sbold)
                Html::addCssClass($this->options, "sbold uppercase");
        }
        if ($this->block)
            Html::addCssClass($this->options, "btn-block");
        if ($this->circle)
            Html::addCssClass($this->options, "btn-circle");
        if ($this->iconOnly)
            Html::addCssClass($this->options, "btn-icon-only");
        if ($this->disabled)
            $this->options["disabled"] = "";

        switch ($this->size){
            case self::SIZE_LARGE:
                Html::addCssClass($this->options, "btn-lg");
                break;
            case self::SIZE_SMALL:
                Html::addCssClass($this->options, "btn-sm");
                break;
        }

        $icon = empty($this->icon)?"":Html::tag("i","",["class"=>$this->icon]);
        $content = empty($icon)?$this->text:"$this->text $icon";

        switch ($this->tag){
            case self::TAG_A:
                $button = Html::a($content,$this->url,$this->options);
                break;
            case self::TAG_SUBMIT:
                $button = Html::submitButton($content,$this->options);
                break;
            default:
                $button = Html::button($content,$this->options);
        }

        echo $button;
    }
}
?>