<?php
namespace layui\widgets;

use yii\helpers\Html;

class Blockquote extends LayuiWidget
{
    public $nm = false;

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
        $card = $this->renderBlockquote($content);

        //返回
        echo $card;
    }

    protected function renderBlockquote($content){
        $options = ["class"=>"layui-elem-quote"];
        if($this->nm) Html::addCssClass($options,"layui-quote-nm");

        $blockquote = Html::tag("blockquote ",$content,$options);

        return $blockquote;
    }
}
?>