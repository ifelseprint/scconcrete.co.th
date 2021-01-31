<?php

namespace frontend\controllers;

use Yii;
use common\models\Banner;
use common\models\NewsCategory;
use frontend\models\News;
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

        $BannerActivitySocial = Banner::findOne(['is_active' => 1,'banner_page_id' => 12,'banner_mapping_id' => 1]);
        $BannerActivityCompany = Banner::findOne(['is_active' => 1,'banner_page_id' => 13,'banner_mapping_id' => 1]);

        $News = News::find()
        ->where(['is_active' => 1])
        ->orderBy(['news_id' => SORT_DESC])
        ->limit(6)
        ->offset(0)
        ->all();
        return $this->render('index', [
            'BannerActivitySocial' => $BannerActivitySocial,
            'BannerActivityCompany' => $BannerActivityCompany,
            'News' => $News,
        ]);
    }

    public function actionAll()
    {
        $slug_id = Yii::$app->getRequest()->getQueryParam('slug_id');
        $slug_name = Yii::$app->getRequest()->getQueryParam('news_all');

        if(Yii::t('app', 'social_activity')==$slug_name){
            $news_category = 1;
            $page_id = 12;
        }else if(Yii::t('app', 'company_activity')==$slug_name){
            $news_category = 2;
            $page_id = 13;
        }
        $Pages = \common\models\Pages::findOne(['is_active' => 1,'page_id' => $page_id]);
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

        $News = \common\models\News::find()
        ->where(['is_active' => 1])
        ->andWhere(['news_category' => $news_category])
        ->orderBy(['news_id' => SORT_ASC])
        ->all();
        $NewsCategory = NewsCategory::findOne(['id' => $news_category]);

        return $this->render('all', [
            'News' => $News,
            'NewsCategory' => $NewsCategory
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

