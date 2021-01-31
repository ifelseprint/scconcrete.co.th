<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Request;
use backend\models\Branch;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
class BranchController extends \yii\web\Controller
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
    	$model = new Branch();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['Branch']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['Branch']['pageSize'];
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
    	$Branch = new Branch();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Branch,null);
            }
        }
        return $this->renderAjax('create', [
			'Branch' => $Branch,
		]);
    }

    public function actionUpdate()
    {
    	$id = Yii::$app->request->get('id');
        $Branch = Branch::findOne(['branch_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Branch,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Branch' => $Branch,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');

    	$Branch = Branch::find()
		->where(['branch_id'=>$id])
		->one()
		->delete();

		$model = new Branch();
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

        // Branch
        $model->load(Yii::$app->request->post());
        $model->branch_address_th = nl2br(Yii::$app->request->post()['Branch']['branch_address_th']);
        $model->branch_address_en = nl2br(Yii::$app->request->post()['Branch']['branch_address_en']);
        $model->save();

        return true;
    }
}
