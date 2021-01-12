<?php
namespace frontend\controllers;
use common\models\Banner;
use common\models\Promotion;
use common\models\Product;
use common\models\Article;
use yii;
class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Pages = \common\models\Pages::findOne(['is_active' => 1,'page_id' => 1]);
        $meta_tag_title = "meta_tag_title_".Yii::$app->language;
        $meta_tag_description = "meta_tag_description_".Yii::$app->language;
        $meta_tag_keywords = "meta_tag_keywords_".Yii::$app->language;

        Yii::$app->view->title = $Pages->$meta_tag_title;
        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $Pages->$meta_tag_description
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $Pages->$meta_tag_keywords
        ]);

        $Banner = Banner::findOne(['is_active' => 1,'banner_page_id' => 1,'banner_mapping_id' => 1,]);
    	$Promotion = Promotion::findAll(['is_active' => 1]);

        $Article = Article::findAll(['is_active' => 1]);

        $Product = Product::find()
        ->where(['is_active' => 1])
        ->orderBy(['product_id' => SORT_ASC])
        ->all();
        return $this->render('index', [
            'Banner' => $Banner,
    		'Promotion' => $Promotion,
    		'Product' => $Product,
            'Article' => $Article
    	]);
    }
    public function actionProduct($id)
    {
        $Product = \frontend\models\Product::find()
        ->where(['is_active' => 1])
        ->andWhere(['product_id' => $id])
        ->asArray()
        ->one();

        $Product['product_name'] = $Product['product_name_'.Yii::$app->language];
        $Product['product_detail'] = $Product['product_detail_'.Yii::$app->language];

        return json_encode([
            "status" => true,
            "response" => $Product
        ]);
        exit;
    }
}
