<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',
    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-api',
        ],
        //配置RESTful返回格式
        'response' => [
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                //获取设置response
                $response = $event->sender;
                $response->format = yii\web\Response::FORMAT_JSON;
                //处理返回信息
                if ($response->isSuccessful) {
                    $code = 0;
                    $message = "Success";
                    $data = $response->data;
                }
                else {
                    $code = $response->statusCode;
                    $message = isset($response->data["message"])?$response->data["message"]:"";
                    $data = null;
                }
                //自定义返回结构
                $response->data = [
                    'state' =>  [
                        'code' => $code,
                        'message' => $message,
                    ],
                    'data' => $data,
                ];
            },
        ],
        'user' => [
            'identityClass' => 'common\models\user\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the api
            'name' => 'advanced-api',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'pluralize' => false,
                    'controller' => ['v1/user'],
                    'extraPatterns' => [
                        'GET info/<id:\d+>' => 'info',
                        'POST info/<id:\d+>' => 'info-update'
                    ],

                ]
            ],
        ],

    ],
    'params' => $params,
];
