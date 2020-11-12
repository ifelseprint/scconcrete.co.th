<?php

namespace frontend\controllers;

use Yii;
use frontend\models\News;
use common\models\Banner;
class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Pages = \common\models\Pages::findOne(['is_active' => 1,'page_id' => 4]);
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

        $Banner = Banner::findOne(['is_active' => 1,'banner_page_id' => 4,'banner_mapping_id' => 1,]);
        $News = \common\models\News::find()
        ->where(['is_active' => 1])
        ->orderBy(['news_id' => SORT_ASC])
        ->all();
        return $this->render('index', [
            'Banner' => $Banner,
            'News' => $News,
        ]);
    }

    public function actionView()
    {
        $slug_id = Yii::$app->getRequest()->getQueryParam('slug_id');

        $News = News::find()
        ->joinWith('newsDetails')
        ->where(['news.is_active' => 1])
        ->andWhere(['news.news_id' => $slug_id])
        ->orderBy(['news.news_id' => SORT_ASC])
        ->one();

        $meta_tag_title = "meta_tag_title_".Yii::$app->language;
        $meta_tag_description = "meta_tag_description_".Yii::$app->language;
        $meta_tag_keywords = "meta_tag_keywords_".Yii::$app->language;
        Yii::$app->view->title = $News->$meta_tag_title;
        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $News->$meta_tag_description
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $News->$meta_tag_keywords
        ]);

        return $this->render('view', [
            'News' => $News,
        ]);
    }

}

