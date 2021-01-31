<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Request;
use backend\models\Partner;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
class PartnerController extends \yii\web\Controller
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
    	$model = new Partner();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['Partner']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['Partner']['pageSize'];
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
    	$Partner = new Partner();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Partner,null);
            }
        }
        return $this->renderAjax('create', [
			'Partner' => $Partner,
		]);
    }

    public function actionUpdate()
    {
    	$id = Yii::$app->request->get('id');
        $Partner = Partner::findOne(['partner_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($Partner,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Partner' => $Partner,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');

    	$Partner = Partner::find()
		->where(['partner_id'=>$id])
		->one()
		->delete();

		$model = new Partner();
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

        // Partner
        $model->load(Yii::$app->request->post());
        $model->partner_image = UploadedFile::getInstance($model, 'partner_image');

        if(!empty($model->partner_image)){
        $partner_image_file  = $model->partner_image->baseName.'_'.time().'.'.$model->partner_image->extension;
        $partner_image_path  = $folder_upload."/".$path_folder."/".$partner_image_file;
        $model->partner_image->saveAs($partner_image_path);
        $model->partner_image = $partner_image_file;
        $model->partner_image_path = $path_folder;
        }else{
        $model->partner_image = $model->getOldAttribute('partner_image');
        $model->partner_image_path = $model->getOldAttribute('partner_image_path');
        }
        $model->save();

        return true;
    }
}
