<?php

namespace admin\controllers;

use common\lib\Upload;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * OptionController implements the CRUD actions for Option model.
 */
class UploadController extends Controller
{
    //关闭CSRF
    public $enableCsrfValidation = false;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * 单文件上传
     */
    public function actionFile()
    {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $path = Upload::upload_file($file);
            Upload::sentApiResult(0,"",$path);
        }
        else{
            Upload::sentApiResult(0,"image could not be saved.",null);
        }
    }

    /**
     * 单上传文件(Base64字符串)
     * 必须存在$_POST['base64']
     */
    public function actionBase64(){
        if (isset($_POST['base64'])) {
            $base64 = $_POST['base64'];
            $path = Upload::upload_base64($base64);
            Upload::sentApiResult(0,"",$path);
        }
        else{
            Upload::sentApiResult(0,"image could not be saved.",null);
        }
    }
}
