# yii-admin2

#### 项目介绍
这是由`yii-2.0.15`为基础上进行开发配置，完成功能涵盖了：前后端用户管理、RBAC权限管理、后台布局与UI库、RESTful API应用等。

#### 使用说明
1. 下载/克隆项目
2. 进入advanced项目目录: `cd advanced`
3. 安装composer包: `composer install`
4. 初始化: `init.bat`
5. 进行数据库配置，配置文件: `commin/config/main-local.php`
6. 数据库迁移(回到advanced运行): `php yii migrate`
7. 用内置Web Server运行admin应用: `php yii serve -t admin\web --port=8080` (默认应用console,默认端口8080)
8. 浏览器中访问: `http://localhost:8080/`

#### 项目架构
```
advanced
    common
        config/             公共配置
        models/             公共模型
    console
        config/             CLI配置目录
        controllers/        CLI控制器目录(定义CLI命令)
        migrations/         数据库迁移相关目录
        models/             CLI模型目录
    backend
        assets/             后端资源目录(JavaScript和CSS)
        config/             后端配置目录
        controllers/        后端控制器目录
        metronic/           Metronic的资源和小部件目录
        models/             后端模型目录
        views/              后端视图目录
        web/                后端Web根目录
    admin                   功能backend的复刻，界面改用LayUI和IFrame去设计
        assets/             后端资源目录(JavaScript和CSS)
        config/             后端配置目录
        controllers/        后端控制器目录
        layui/              LayUI的资源和小部件目录
        models/             后端模型目录
        views/              后端视图目录
        web/                后端Web根目录
    api
        config/             API配置目录
        controllers/        入口控制器目录
        modules
            v1/             API的v1版本目录(包含了独立的MVC目录)
    frontend
        assets/             前端资源目录(JavaScript和CSS)
        config/             前端配置目录
        controllers/        前端控制器目录
        models/             前端模型目录
        views/              前端视图目录
        web/                前端Web根目录
        widgets/            前端小部件目录
    upload/                 文件上传目录
    vendor/                 composer依赖包目录
```

#### 参与贡献
1. Fork 本项目
2. 新建 Feat_xxx 分支
3. 提交代码
4. 新建 Pull Request