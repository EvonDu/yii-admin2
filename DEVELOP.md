# 开发历史
### 1、部署基础项目
- 下载yii高级应用，版本2.0.15
- 初始化：`init.bat`
- 数据库迁移：`php yii migrate`

### 2、用户模型迁移
- 迁移默认用户模型
  - 把backend(本来就空)、frontend、common的用户相关模型，统一归类到common/models/user中。

- 配置后台用户系统Admin:
  - 复制数据库的user表为admin。
  - 复制修改User模型，制作成Admin模型。(common/models/admin)
  - 配置backend/config/main.php中的identityClass为common\models\admin\Admin。
  - 修改控制器SiteController，用引入的的登录表单模型为：common\models\admin\LoginForm
  - 编写ChangePasswordForm，作为修改密码时使用的表模型。
  - 编写SignupForm(参考frontend的)，作为创建admin的用户时使用的表模型。
  - 使用Gii补全Search类：AdminSearch
  - 在backend/controllers/SiteController中编写ChangePassword方法，并且添加相应的视图，并把选项注册到视图的layout/main.php中。(注意，需要在behaviors中配置该方法的访问权限)

- 配置前台用户系统User:
  - frontend/config/main.php中的identityClass为common\models\user\User。
  - 迁移前台中的表模型：PasswordResetRequestForm、ResetPasswordForm、SignupForm
  - frontend/controllers/SiteController中，表模型的引用。

### 3、配置RBAC
- 在根目录放置metronic，然后配置common/main.php，添加配置项(componentsne内):
  ```
  'authManager'=>[
            'class'=>'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],
  ```
- 使用数据库迁移，生成相关数据表：
  - `yii migrate --migrationPath=@yii/rbac/migrations`

### 4、添加yii-metronic：

- 在根目录放置metronic，然后配置common/main.php，添加配置项:
  - `Yii::setAlias('@metronic', dirname(dirname(__DIR__)) . '/metronic');`
  
### 5、添加相关布局

- 在`backend/views/layouts/metronic`中添加metronic相关布局:`main.php`和`metronic-login.php`
- 添加`backend/nav/nav.php`放置导航相关信息
- 配置`backend/config/main.php`中layout项，配置使用metronic布局

### 6、设置后台登录页面
- 编写`backend/views/site/login-metronic`
- 配置`SiteController`中的login方法
  - 使用的layout：`$this->layout = "metronic/login";`
  - 修改调用的视图为：`login-metronic`

### 7、完成用户的CURD
- 用`gii`生成user和admin的search类和curd等，并对视图进行调整。
- 把create方法替换为signup方法。

### 8、设置全局设置
- 配置文件为common/config/main.php
    - 设置语言：`'language'=>'zh-CN'`
    - 设置时区：`'timeZone' => 'Asia/Shanghai'`

### 9、完成权限的CURD
- 用`gii`生成授权相关表的模型。
- 完成角色的CURD操作。
- 完成角色分配功能。
- 完成权限分配功能。

### 10、新增用户信息功能(info)
- 新增`user_info`和`admin_info`表
- 为`user`和`admin`添加属性`info`
- 用`Info`相关的修改方法替换掉`UserController`和`AdminController`的`Update`方法使用（指视图上上，Update方法还是保留的）。


### 11、创建数据库迁移
- 根目录下执行：`yii migrate/create <name>`
  - 例如：`yii migrate/create yii_admin2` 
  - 注意：不能使用'`-`'
- 建立好数据库迁移后，编写代码完成表的建立等。

### 12、使用metronic重构视图层
- 重建用户相关视图

### 13、添加用户头像上传
- 添加通用上传控制器UploadController。
- 在`common\lib`中添加`Upload`类，用于编写上传逻辑。
- 添加fileinput上传widget到`common\widgets`中。（注意由于JQ版本问题，不再支持ajaxfileupload）
- 修改用户信息info的视图中的头像设置。
- 修改用户视图`view`中的头像显示设置。
- 修改layout中显示图像。

### 14、添加metronic的gii-curl模板
- 添加位置:`metronic/gii-templat`
- 然后在`vendor\yiisoft\yii2-gii\generators\crud\default`复制默认模板出来修改。
- 修改配置文件：`backend\config\main.php`中,在modules下增加gii的配置：
```
'modules' => [
        //配置GII
        'gii'=>[
            'class' => 'yii\gii\Module',
            'generators' => [
                //配置生成器
                'crud' => [
                    'class' => 'yii\gii\generators\crud\Generator',
                    'templates' => [
                        //模板名 => 模板路径
                        'metronic' => '@metronic/gii-template/curd',
                    ]
                ]
            ],
        ]
    ],
```

### 15、添加API应用
- 做好应用初始化配置。
- 配置使用模块化做版本管理(modules)。
- 在配置文件`main.php`中配置response，以自定义返回格式。
- 添加ApiDoc生成工具相关文件，`apidoc.json`和`doc-create.bat`(允许需要由node支持，并安装apidoc)。
- 编写基础的用户API。

### 16、添加Admin应用
- 参考backend应用，配置admin应用。
- 采用beginner做为layout模板。
- 采用layui做为UI库。

### 17、统合上传目录
- 修改upload控制器，添加读取文件的get方法。
- 把上传目录设置为根目录下的`uoload`文件夹。
- 所有读取上传文件的方式，改为通过upload控制的get方法读取。