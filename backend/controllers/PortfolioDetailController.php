<?php

namespace backend\controllers;
use Yii;
use backend\models\PortfolioDetail;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Request;
use yii\web\UploadedFile;
class PortfolioDetailController extends \yii\web\Controller
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
    	$model = new PortfolioDetail();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['PortfolioDetail']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['PortfolioDetail']['pageSize'];
        	}
        	return $this->renderPartial('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search,
        	]);
        }else{
        	return $this->render('index', [
        		'model' => $model,
            	'dataProvider' => $dataProvider,
            	'search' => $search,
        	]);

        }
    }
    public function actionCreate()
    {
        $Portfolio = ArrayHelper::map(\common\models\Portfolio::find()
        ->all(), 'portfolio_id', 'portfolio_name_th');

    	$PortfolioDetail = new PortfolioDetail();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
            	$save = $this->save($PortfolioDetail,null,null,null);
            }
        }
        return $this->renderAjax('create', [
			'Portfolio' => $Portfolio,
            'PortfolioDetail' => $PortfolioDetail,
		]);
    }

    public function actionUpdate()
    {
        $Portfolio = ArrayHelper::map(\common\models\Portfolio::find()
        ->all(), 'portfolio_id', 'portfolio_name_th');

    	$id = Yii::$app->request->get('id');
    	$PortfolioDetail = PortfolioDetail::findOne(['portfolio_detail_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
            	$save = $this->save($PortfolioDetail,null,null,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Portfolio' => $Portfolio,
            'PortfolioDetail' => $PortfolioDetail,
		]);
    }

    public function actionDelete()
    {
    	$id = Yii::$app->request->get('id');
    	$PortfolioDetail = \common\models\PortfolioDetail::find()
		->where(['portfolio_detail_id'=>$id])
		->one()
		->delete();

		$model = new PortfolioDetail();
		$search = Yii::$app->request->queryParams;
        $dataProvider = $model->search($search);
		return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'search' => $search
        ]);
    }


    public function save($model,$model2=null,$banner=null,$id=null)
    {

        // Portfolio
        $model->portfolio_id = Yii::$app->request->post()['PortfolioDetail']['portfolio_id'];
        $model->portfolio_detail_content_th = Yii::$app->request->post()['PortfolioDetail']['portfolio_detail_content_th'];
        $model->portfolio_detail_content_en = Yii::$app->request->post()['PortfolioDetail']['portfolio_detail_content_en'];
        $model->portfolio_detail_image = UploadedFile::getInstance($model, 'portfolio_detail_image');
        $portfolio_detail_image = $model->upload();

        if(!empty($portfolio_detail_image)){
            $model->portfolio_detail_image = $portfolio_detail_image['fileName'];
            $model->portfolio_detail_image_path = $portfolio_detail_image['filePath'];
        }else{
            $model->portfolio_detail_image = $model->getOldAttribute('portfolio_detail_image');
            $model->portfolio_detail_image_path = $model->getOldAttribute('portfolio_detail_image_path');
        }
        $model->is_active = Yii::$app->request->post()['PortfolioDetail']['is_active'];
        $model->save();
    }
}
