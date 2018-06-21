<?php
namespace layui\field;

use yii\helpers\Html;
use layui\widgets\LayuiWidget;
use yii\helpers\Url;

/**
 * 使用方法：
 * $form->field($model, 'data')->edit(["uploadUrl"=>yii\helpers\Url::to(["upload/lay"])])
 */
class Edit extends LayuiInputWidget
{
    public $uploadUrl;

    public function run()
    {
        //parent
        parent::run(); // TODO: Change the autogenerated stub

        //js
        $this->registerJs();

        //element
        $options = ["id"=>$this->id,"style"=>"display:none"];
        $element = Html::textarea($this->name,$this->value,$options);

        //return
        return $element;
    }

    public function registerJs(){
        $view = $this->getView();
        $view->registerJs('layui.use("layedit", function(){
            var layedit = layui.layedit;
            layedit.set({
                uploadImage: {
                    url: "'.$this->uploadUrl.'" //接口url
                }
            });
            layedit.build("'.$this->id.'");
        });');
    }
}