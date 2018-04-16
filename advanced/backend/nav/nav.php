<?php
namespace backend\nav;

use yii\helpers\Url;

class Nav
{
    static function GetItems()
    {
        $menuItems = array(
            1 => array(
                'title' => "用户管理",
                'icon' => 'icon-user',
                'auth' => '',
                'items' => array(
                    //1 => array('title' => Yii::t('base', 'webuser_manager'), 'url' => yii\helpers\Url::to(['user/user/index']), 'auth' => ''),
                    //2 => array('title' => Yii::t('base', 'adminuser_manager'), 'url' => yii\helpers\Url::to(['user/adminuser/index']), 'auth' => ''),
                    3 => array('title' => "用户列表", 'url' => Url::to(['user/user/index']), 'auth' => ''),
                    4 => array('title' => "角色管理", 'url' => Url::to(['user/auth/roles']), 'auth' => ''),
                    5 => array('title' => "权限管理", 'url' => Url::to(['user/auth/permissions']), 'auth' => ''),
                )
            ),
        );

        return $menuItems;
    }
}
?>