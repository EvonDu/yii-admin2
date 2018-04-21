<?php
namespace common\models\auth;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * Auth assign form
 */
class AuthAssignForm extends Model
{
    public $role;
    public $auths;
    private $list;

    /**
     * AuthAssignForm constructor.
     * @param array $role_id
     * @param array $config
     */
    public function __construct($role_id, array $config = [])
    {
        //获取角色
        $this->role = AuthItem::findOne($role_id);
        //获取拥有权限
        $this->auths = ArrayHelper::getColumn($this->role->authItemChildren, 'child');

        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auths'], 'safe'],
        ];
    }

    /**
     * @return bool
     */
    public function save(){
        if($this->role){
            AuthItemChild::deleteAll(["parent"=>$this->role->name]);
            if(is_array($this->auths)){
                foreach ($this->auths as $auth){
                    $item = new AuthItemChild();
                    $item->parent = $this->role->name;
                    $item->child = $auth;
                    $item->save();
                }
            }
        }
        return true;
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'role' => '角色',
            'auths' => '权限列表',
        ];
    }

    /**
     * @return array
     */
    public function getList(){
        if(empty($this->list)){
            $search = AuthItem::findAll(['type'=>"2"]);
            $this->list = ArrayHelper::map($search, 'name', 'description');
        }

        return $this->list;
    }
}