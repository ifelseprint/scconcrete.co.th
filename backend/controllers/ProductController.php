<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Request;
use backend\models\Product;
use common\models\ProductDetail;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
class ProductController extends \yii\web\Controller
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
    	$model = new Product();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['Product']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['Product']['pageSize'];
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
    	$Product = new Product();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
				$save = $this->save($Product,null);
            }
        }
        return $this->renderAjax('create', [
			'Product' => $Product,
		]);
    }

    public function actionUpdate()
    {
    	$id = Yii::$app->request->get('id');
    	$Product = Product::findOne(['product_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
            	$save = $this->save($Product,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Product' => $Product,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');

    	$Product = Product::find()
		->where(['product_id'=>$id])
		->one()
		->delete();

		$model = new Product();
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

    	// product
        $model->product_category = Yii::$app->request->post()['Product']['product_category'];
    	$model->product_name_th = Yii::$app->request->post()['Product']['product_name_th'];
    	$model->product_detail_th = Yii::$app->request->post()['Product']['product_detail_th'];
        $model->product_name_en = Yii::$app->request->post()['Product']['product_name_en'];
        $model->product_detail_en = Yii::$app->request->post()['Product']['product_detail_en'];

        $model->meta_tag_title_th = Yii::$app->request->post()['Product']['meta_tag_title_th'];
        $model->meta_tag_title_en = Yii::$app->request->post()['Product']['meta_tag_title_en'];
        $model->meta_tag_description_th = Yii::$app->request->post()['Product']['meta_tag_description_th'];
        $model->meta_tag_description_en = Yii::$app->request->post()['Product']['meta_tag_description_en'];
        $model->meta_tag_keywords_th = Yii::$app->request->post()['Product']['meta_tag_keywords_th'];
        $model->meta_tag_keywords_en = Yii::$app->request->post()['Product']['meta_tag_keywords_en'];

        $model->product_image = UploadedFile::getInstance($model, 'product_image');
        if(!empty($model->product_image)){
        $product_image_file  = $model->product_image->baseName.'_'.time().'.'.$model->product_image->extension;
        $product_image_path  = $folder_upload."/".$path_folder."/".$product_image_file;
        $model->product_image->saveAs($product_image_path);
        $model->product_image = $product_image_file;
        $model->product_image_path = $path_folder;
        }else{
        $model->product_image = $model->getOldAttribute('product_image');
        $model->product_image_path = $model->getOldAttribute('product_image_path');
        }

		$model->is_active = Yii::$app->request->post()['Product']['is_active'];
		$model->save();
    }
}
