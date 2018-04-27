<?php
namespace admin\nav;

use yii\helpers\Url;

class Nav
{
    static public function GetItems()
    {
        $menuItems=array(
            array(
                'title'=>"用户管理",
                'icon'=>'&#xe613;',
                "spread"=>true,
                'auth'=>'',
                'children'=>array(
                    array('title'=>'系统用户','href'=>Url::to(['user/admin/index']),'icon'=>'&#xe60a;','auth'=>''),
                    array('title'=>'用户管理','href'=>Url::to(['user/user/index']),'icon'=>'&#xe62d;','auth'=>''),
                    array('title'=>'角色管理','href'=>Url::to(['user/role/index']),'icon'=>'&#xe612;','auth'=>''),
                    array('title'=>'权限管理','href'=>Url::to(['user/auth/index']),'icon'=>'&#xe614;','auth'=>''),
                ),
            ),
        );
        return $menuItems;
    }
}
?>