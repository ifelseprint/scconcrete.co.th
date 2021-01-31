<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Request;
use backend\models\News;
use common\models\NewsDetail;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
class NewsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','create', 'update', 'delete'],
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
    	$model = new News();
        $dataProvider = $model->search($search);
        $NewsCategory = ArrayHelper::map(\common\models\NewsCategory::find()
        ->all(), 'id', 'news_category_name_th');

        if(Yii::$app->request->isPjax){

        	if(!empty($search['News']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['News']['pageSize'];
        	}
        	return $this->renderPartial('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search,
                'NewsCategory' => $NewsCategory
        	]);
        }else{
        	return $this->render('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search,
                'NewsCategory' => $NewsCategory
        	]);

        }
    }
    public function actionCreate()
    {
    	$News = new News();
    	$NewsDetail = new NewsDetail();
        $NewsCategory = ArrayHelper::map(\common\models\NewsCategory::find()
        ->all(), 'id', 'news_category_name_th');

    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($News,$NewsDetail,null);
            }
        }
        return $this->renderAjax('create', [
			'News' => $News,
			'NewsDetail' => $NewsDetail,
            'NewsCategory' => $NewsCategory,
		]);
    }

    public function actionUpdate()
    {
    	$id = Yii::$app->request->get('id');
    	$News = News::findOne(['news_id' => $id]);
    	$NewsDetail = NewsDetail::findOne(['news_id' => $id]);
        $NewsCategory = ArrayHelper::map(\common\models\NewsCategory::find()
        ->all(), 'id', 'news_category_name_th');

    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
                $save = $this->save($News,$NewsDetail,$id);
            }
        }
    	return $this->renderAjax('update', [
			'News' => $News,
			'NewsDetail' => $NewsDetail,
            'NewsCategory' => $NewsCategory,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');
    	$NewsDetail = NewsDetail::find()
		->where(['news_id'=>$id])
		->one()
		->delete();

    	$News = News::find()
		->where(['news_id'=>$id])
		->one()
		->delete();

		$model = new News();
		$search = Yii::$app->request->queryParams;
        $dataProvider = $model->search($search);
        $NewsCategory = ArrayHelper::map(\common\models\NewsCategory::find()
        ->all(), 'id', 'news_category_name_th');

		return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'search' => $search,
            'NewsCategory' => $NewsCategory
        ]);
    }
    public function save($model,$model2=null,$id=null)
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

        // News
        $model->news_category = Yii::$app->request->post()['News']['news_category'];
        $model->news_name_th = Yii::$app->request->post()['News']['news_name_th'];
        $model->news_name_en = Yii::$app->request->post()['News']['news_name_en'];

        $model->meta_tag_title_th = Yii::$app->request->post()['News']['meta_tag_title_th'];
        $model->meta_tag_title_en = Yii::$app->request->post()['News']['meta_tag_title_en'];
        $model->meta_tag_description_th = Yii::$app->request->post()['News']['meta_tag_description_th'];
        $model->meta_tag_description_en = Yii::$app->request->post()['News']['meta_tag_description_en'];
        $model->meta_tag_keywords_th = Yii::$app->request->post()['News']['meta_tag_keywords_th'];
        $model->meta_tag_keywords_en = Yii::$app->request->post()['News']['meta_tag_keywords_en'];

        $model->news_image = UploadedFile::getInstance($model, 'news_image');

        if(!empty($model->news_image)){
        $news_image_file  = $model->news_image->baseName.'_'.time().'.'.$model->news_image->extension;
        $news_image_path  = $folder_upload."/".$path_folder."/".$news_image_file;
        $model->news_image->saveAs($news_image_path);
        $model->news_image = $news_image_file;
        $model->news_image_path = $path_folder;
        }else{
        $model->news_image = $model->getOldAttribute('news_image');
        $model->news_image_path = $model->getOldAttribute('news_image_path');
        }
        $model->is_active = Yii::$app->request->post()['News']['is_active'];
        $model->save();

        // News detail
        $model2->news_id = $model->news_id;
        $model2->news_detail_content_th = Yii::$app->request->post()['NewsDetail']['news_detail_content_th'];
        $model2->news_detail_content_en = Yii::$app->request->post()['NewsDetail']['news_detail_content_en'];
        $model2->save();

        return true;
    }
}
