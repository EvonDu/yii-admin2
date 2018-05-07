<?php
namespace layui\widgets;

use Yii;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
    public $tag = 'span';
    public $options = ['class' => 'layui-breadcrumb'];
    public $itemTemplate = "{link}\n";
    public $activeItemTemplate = "<a><cite>{link}</cite></a>\n";

    function run()
    {
        $this->homeLink = [
            'label' => Yii::t('yii', 'Home'),
            'url' => ''
        ];
        return parent::run(); // TODO: Change the autogenerated stub
    }
}
?>