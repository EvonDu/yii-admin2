<?php
namespace layui\widgets;

use yii\helpers\Html;

class Card extends LayuiWidget
{
    //tag
    const TAG_A = "a";
    const TAG_SUBMIT = "submit";
    const TAG_BUTTON = "button";

    //params
    public $title = '';
    public $col = 12;
    public $icon = '';

    public function init()
    {
        //调用父类初始化方法
        parent::init();

        //缓冲文档,用于获取begin和end中的内容
        ob_start();
    }

    public function run()
    {
        //执行父函数，并解除文档缓存
        parent::run();
        $content = ob_get_clean();

        //获取Portlet
        $card = $this->renderCard($content);

        //添加col-md
        if(!empty($this->col))
            $card = Html::tag("div",$card,['class'=>"layui-col-md$this->col"]);

        //返回
        echo $card;
    }

    protected function renderCard($content){
        $icon = empty($this->icon)?"":Html::tag("i",$this->icon,['class'=>"layui-icon"]);
        $header = Html::tag("div","$icon $this->title",['class'=>"layui-card-header"]);
        $body = Html::tag("div",$content,['class'=>"layui-card-body"]);
        $card = Html::tag("div","$header\n$body",['class'=>'layui-card']);

        return $card;
    }
}
?>