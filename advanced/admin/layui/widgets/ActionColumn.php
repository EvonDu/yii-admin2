<?php
namespace layui\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class ActionColumn extends \yii\grid\ActionColumn {
    public $btnGroup = true;

    function init()
    {
        if($this->btnGroup)
            $this->template = '<div class="layui-btn-group">'.$this->template.'</div>';

        parent::init(); // TODO: Change the autogenerated stub
    }

    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                return Button::widget([
                    //"text"=>Yii::t('yii', 'View'),
                    "icon"=>"&#xe63c;",
                    "tag"=>Button::TAG_A,
                    "size"=>Button::SIZE_SM,
                    "theme"=>Button::THEME_DEFAULT,
                    "url"=>$url,
                    "options"=>[
                        'title' => Yii::t('yii', 'View'),
                        'aria-label' => Yii::t('yii', 'View'),
                        'data-pjax' => '0',
                    ],
                ]);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                return Button::widget([
                    //"text"=>Yii::t('yii', 'Update'),
                    "icon"=>"&#xe642;",
                    "tag"=>Button::TAG_A,
                    "size"=>Button::SIZE_SM,
                    "theme"=>Button::THEME_NORMAL,
                    "url"=>$url,
                    "options"=>[
                        'title' => Yii::t('yii', 'Update'),
                        'aria-label' => Yii::t('yii', 'Update'),
                        'data-pjax' => '0',
                    ],
                ]);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                return Button::widget([
                    //"text"=>Yii::t('yii', 'Delete'),
                    "icon"=>"&#xe640;",
                    "tag"=>Button::TAG_A,
                    "size"=>Button::SIZE_SM,
                    "theme"=>Button::THEME_DANGER,
                    "url"=>$url,
                    "options"=>[
                        'title' => Yii::t('yii', 'Delete'),
                        'aria-label' => Yii::t('yii', 'Delete'),
                        'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                        'data-method' => 'post',
                        'data-pjax' => '0',
                    ],
                ]);
            };
        }
    }
}