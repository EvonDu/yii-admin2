<?php
namespace metronic\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class ActionColumn extends \yii\grid\ActionColumn {
    function init()
    {
        Html::addCssClass($this->buttonOptions,"btn");
        Html::addCssClass($this->buttonOptions,"btn-outline");
        Html::addCssClass($this->buttonOptions,"btn-xs");
        Html::addCssClass($this->buttonOptions,"btn-circle");

        parent::init(); // TODO: Change the autogenerated stub
    }

    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                Html::addCssClass($options,"blue");
                return Html::a(Yii::t('yii', 'View')." <i class='glyphicon glyphicon-eye-open'></i>", $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                Html::addCssClass($options,"green");
                return Html::a(Yii::t('yii', 'Update')." <i class='glyphicon glyphicon-pencil'></i>", $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                Html::addCssClass($options,"red");
                return Html::a(Yii::t('yii', 'Delete')." <i class='glyphicon glyphicon-trash'></i>", $url, $options);
            };
        }
    }
}
