<?php

namespace backend\controllers;
use Yii;
use backend\models\Portfolio;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Request;
use yii\web\UploadedFile;
class PortfolioController extends \yii\web\Controller
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
    	$model = new Portfolio();
        $dataProvider = $model->search($search);
        if(Yii::$app->request->isPjax){

        	if(!empty($search['Portfolio']['pageSize'])){
        		$dataProvider->pagination->pageSize = $search['Portfolio']['pageSize'];
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
        $PortfolioCategory = ArrayHelper::map(\common\models\PortfolioCategory::find()
        ->all(), 'id', 'portfolio_category_name_th');

    	$Portfolio = new Portfolio();
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
            	$save = $this->save($Portfolio,null,null,null);
            }
        }
        return $this->renderAjax('create', [
			'Portfolio' => $Portfolio,
            'PortfolioCategory' => $PortfolioCategory,
		]);
    }

    public function actionUpdate()
    {
        $PortfolioCategory = ArrayHelper::map(\common\models\PortfolioCategory::find()
        ->all(), 'id', 'portfolio_category_name_th');

    	$id = Yii::$app->request->get('id');
    	$Portfolio = Portfolio::findOne(['portfolio_id' => $id]);
    	if (Yii::$app->request->isAjax) {
            if(Yii::$app->request->isPost){
            	$save = $this->save($Portfolio,null,null,$id);
            }
        }
    	return $this->renderAjax('update', [
			'Portfolio' => $Portfolio,
            'PortfolioCategory' => $PortfolioCategory,
		]);
    }

    public function actionDelete($id)
    {

    	$Portfolio = \common\models\Portfolio::find()
		->where(['portfolio_id'=>$id])
		->one()
		->delete();
        \common\models\PortfolioDetail::deleteAll(['portfolio_id' => $id]);

		$model = new Portfolio();
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
        $model->portfolio_category = Yii::$app->request->post()['Portfolio']['portfolio_category'];
        $model->portfolio_name_th = Yii::$app->request->post()['Portfolio']['portfolio_name_th'];
        $model->portfolio_name_en = Yii::$app->request->post()['Portfolio']['portfolio_name_en'];
        $model->portfolio_image = UploadedFile::getInstance($model, 'portfolio_image');
        $portfolio_image = $model->upload();

        if(!empty($portfolio_image)){
            $model->portfolio_image = $portfolio_image['fileName'];
            $model->portfolio_image_path = $portfolio_image['filePath'];
        }else{
            $model->portfolio_image = $model->getOldAttribute('portfolio_image');
            $model->portfolio_image_path = $model->getOldAttribute('portfolio_image_path');
        }
        $model->is_active = Yii::$app->request->post()['Portfolio']['is_active'];
        $model->save();
    }
}
