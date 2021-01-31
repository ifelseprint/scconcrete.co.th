<?php

namespace frontend\controllers;
use Yii;
use frontend\models\ContactForm;
use yii\web\Request;
class ContactController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Pages = \common\models\Pages::findOne(['is_active' => 1,'page_id' => 7]);
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

    	$submitForm = Yii::$app->request->post();
    	$ContactForm = new ContactForm();
       	if(Yii::$app->request->isPjax){

            $ContactForm->load($submitForm);
			$ContactForm->created_date = new \yii\db\Expression('NOW()');
       		$ContactForm->save();

        	return $this->renderPartial('index', [
        		'ContactForm' => $ContactForm,
                'Action' => 'insert'
        	]);
        }else{
        	return $this->render('index', [
        		'ContactForm' => $ContactForm,
                'Action' => 'view'
        	]);

        }
    }
}
