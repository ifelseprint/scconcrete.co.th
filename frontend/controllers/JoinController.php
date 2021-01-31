<?php

namespace frontend\controllers;
use Yii;
use common\models\Banner;
use common\models\Jobs;
use frontend\models\JobsForm;
use yii\helpers\Url;
use yii\web\Request;
use yii\web\UploadedFile;
class JoinController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Pages = \common\models\Pages::findOne(['is_active' => 1,'page_id' => 6]);
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

        $Banner = Banner::findOne(['is_active' => 1,'banner_page_id' => 6,'banner_mapping_id' => 1]);
    	$Jobs = Jobs::findAll(['is_active' => 1]);
        return $this->render('index', [
    		'Jobs' => $Jobs,
            'Banner' => $Banner
    	]);
    }
    public function actionJobsView($id)
    {
        $Jobs = Jobs::find()
        ->where(['is_active' => 1])
        ->andWhere(['jobs_id' => $id])
        ->asArray()
        ->one();
        
        $Jobs['jobs_content'] = $Jobs['jobs_content_'.Yii::$app->language];
        $Jobs['jobs_link'] = Url::base(true).'/'.Yii::t('app', 'menu_join_us').'/'.$Jobs['jobs_name_'.Yii::$app->language].'-'.$Jobs['jobs_id'];

        return json_encode([
            "status" => true,
            "response" => $Jobs,
            "language" => Yii::$app->language
        ]);
        exit;
    }
    public function actionView()
    {
        $submitForm = Yii::$app->request->post();
        $slug_id = Yii::$app->getRequest()->getQueryParam('slug_id');

        
        $JobsForm = new JobsForm();
        $Jobs = Jobs::findOne(['is_active' => 1,'jobs_id'=>$slug_id]);
        $Banner = Banner::findOne(['is_active' => 1,'banner_page_id' => 6,'banner_mapping_id' => 1]);

        $meta_tag_title = "meta_tag_title_".Yii::$app->language;
        $meta_tag_description = "meta_tag_description_".Yii::$app->language;
        $meta_tag_keywords = "meta_tag_keywords_".Yii::$app->language;
        Yii::$app->view->title = $Jobs->$meta_tag_title;
        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $Jobs->$meta_tag_description
        ]);
        Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $Jobs->$meta_tag_keywords
        ]);

        if(Yii::$app->request->isPjax){

            $JobsForm->load($submitForm);

            $JobsForm->jobs_form_position = $submitForm['JobsForm']['jobs_form_view'];
            $JobsForm->jobs_form_birthday = date('Y-m-d', strtotime(str_replace('/', '-', $submitForm['JobsForm']['jobs_form_birthday'])));
            $JobsForm->jobs_form_file = UploadedFile::getInstance($JobsForm, 'jobs_form_file');
            $jobs_form_file = $JobsForm->upload('jobs_form_file');
            if(!empty($jobs_form_file)){
                $JobsForm->jobs_form_file = $jobs_form_file['fileName'];
                $JobsForm->jobs_form_file_path = $jobs_form_file['filePath'];
            }
            $JobsForm->created_date = new \yii\db\Expression('NOW()');
            $JobsForm->save();

            return $this->renderPartial('view', [
                'Jobs' => $Jobs,
                'JobsForm' => $JobsForm,
                'JobView' => $slug_id,
                'Action' => 'insert',
                'Banner' => $Banner
            ]);

        }else{
            return $this->render('view', [
                'Jobs' => $Jobs,
                'JobsForm' => $JobsForm,
                'JobView' => $slug_id,
                'Action' => 'view',
                'Banner' => $Banner
            ]);

        }
    }
}
