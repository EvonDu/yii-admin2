<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\admin\LoginForm;
use common\models\admin\ChangePasswordForm;
use common\models\admin\AdminSearch;
use common\models\auth\AuthItemSearch;
use common\models\user\UserSearch;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['home', 'logout', 'index', 'change-password'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = "metronic/login";

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login-metronic', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Change password action.
     *
     * @return string|\yii\web\Response
     */
    public function actionChangePassword(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new ChangePasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->change()) {
            return $this->goBack();
        } else {
            return $this->render('changePassword', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionHome()
    {
        $data = [];

        $searchModel = new AdminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $data["admin_count"] = $dataProvider->totalCount;
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $data["user_count"] = $dataProvider->totalCount;
        $searchModel = new AuthItemSearch();
        $dataProvider = $searchModel->search_role(Yii::$app->request->queryParams);
        $data["role_count"] = $dataProvider->totalCount;
        $dataProvider = $searchModel->search_auth(Yii::$app->request->queryParams);
        $data["auth_count"] = $dataProvider->totalCount;

        return $this->render('home',["data"=>$data]);
    }
}
