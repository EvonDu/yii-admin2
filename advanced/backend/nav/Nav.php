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
                    1 => array('title' => "系统用户", 'url' => Url::to(['user/admin/index']), 'auth' => ''),
                    2 => array('title' => "用户管理", 'url' => Url::to(['user/user/index']), 'auth' => ''),
                    3 => array('title' => "角色管理", 'url' => Url::to(['user/role/index']), 'auth' => ''),
                    4 => array('title' => "权限管理", 'url' => Url::to(['user/auth/index']), 'auth' => ''),
                )
            ),
        );

        return $menuItems;
    }
}
?>