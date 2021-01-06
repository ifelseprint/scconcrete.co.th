<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Users;
use yii\helpers\Url;

/**
 * Site controller
 */
class LoginController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {

        $this->layout = 'login';

        /* set password */
        // $user = new Users();
        // $user->login_username = 'admin';
        // $user->login_password =  $user->setPassword('SC@Concrete2020');
        // $user->is_active = 1;
        // $user->setPassword('SC@Concrete2020');
        // print_r($user->login_password);
        // exit;
        
        /* new user */
        // $user = new Users();
        // $user->login_username = 'admin';
        // $user->login_password =  $user->setPassword('1234');
        // $user->is_active = 1;
        // $user->setPassword('1234');
        // $user->generateAuthKey();
        // $user->generateEmailVerificationToken();
        // $user->save();
        // exit;

        // $session = Yii::$app->session;
        // $session->destroy();
        // Yii::$app->user->logout();

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Yii::$app->urlManager->createUrl(['dashboard']));
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {

            if($model->login()){

                return $this->redirect(Yii::$app->urlManager->createUrl(['dashboard']));

            }else {
                return json_encode([
                    "status" => false,
                    "result" => 'ชื่อผู้เข้าใช้งาน หรือ รหัสผ่านผู้เข้าใช้งาน ไม่ถูกต้อง.'
                ]);
            }

        }

        $model->login_password = '';

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
