<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Request;
use backend\models\Customer;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
class CustomerController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','create','update','delete'],
                        'allow' => true,
                        'roles' => ['@'], // @ = login, ? = no login
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $search = Yii::$app->request->queryParams;
    	$model = new Customer();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['Customer']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['Customer']['pageSize'];
        	}
        	return $this->renderPartial('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search
        	]);
        }else{
        	return $this->render('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search
        	]);

        }
    }
    public function actionCreate()
    {
    	$Customer = new Customer();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Customer,null);
            }
        }
        return $this->renderAjax('create', [
			'Customer' => $Customer,
		]);
    }

    public function actionUpdate()
    {
    	$id = Yii::$app->request->get('id');
        $Customer = Customer::findOne(['customer_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Customer,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Customer' => $Customer,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');

    	$Customer = Customer::find()
		->where(['customer_id'=>$id])
		->one()
		->delete();

		$model = new Customer();
		$search = Yii::$app->request->queryParams;
        $dataProvider = $model->search($search);
		return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'search' => $search
        ]);
    }

    public function save($model,$id=null)
    {

        $folder_upload = Yii::getAlias('@frontend').'/web/uploads';
        $year = date("Y");
        $month = date("m");

        $folder = $folder_upload."/".$year;
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        $folder = $folder_upload."/".$year."/".$month;
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        $path_folder = $year."/".$month;

        // Customer
        $model->load(Yii::$app->request->post());
        $model->customer_image = UploadedFile::getInstance($model, 'customer_image');

        if(!empty($model->customer_image)){
        $customer_image_file  = $model->customer_image->baseName.'_'.time().'.'.$model->customer_image->extension;
        $customer_image_path  = $folder_upload."/".$path_folder."/".$customer_image_file;
        $model->customer_image->saveAs($customer_image_path);
        $model->customer_image = $customer_image_file;
        $model->customer_image_path = $path_folder;
        }else{
        $model->customer_image = $model->getOldAttribute('customer_image');
        $model->customer_image_path = $model->getOldAttribute('customer_image_path');
        }
        $model->save();

        return true;
    }
}
