<?php

namespace frontend\controllers;
use yii;

class PrecastController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $product = \common\models\Product::find()
        ->where(['is_active' => 1])
        ->andWhere(['product_category' => 1])
        ->orderBy(['product_id' => SORT_ASC])
        ->asArray()
        ->all();

        return $this->render('index', [
            'product' => $product,
        ]);
    }
    public function actionView()
    {
        $slug_id = Yii::$app->getRequest()->getQueryParam('slug_id');
        $models = \common\models\Product::find()
        ->where(['is_active' => 1])
        ->andWhere(['product_id' => $slug_id])
        ->orderBy(['product_id' => SORT_ASC])
        ->asArray()
        ->one();

        $meta_tag_title = "meta_tag_title_".Yii::$app->language;
        $meta_tag_description = "meta_tag_description_".Yii::$app->language;
        $meta_tag_keywords = "meta_tag_keywords_".Yii::$app->language;
        Yii::$app->view->title = $models[$meta_tag_title];
        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $models[$meta_tag_description]
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $models[$meta_tag_keywords]
        ]);

        return $this->render('view', [
            'product' => $models,
        ]);
    }
}
