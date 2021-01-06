<?php

namespace frontend\controllers;
use yii;

class ConcreteController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$product = \common\models\Product::find()
        ->where(['is_active' => 1])
        ->andWhere(['product_category' => 2])
        ->orderBy(['product_id' => SORT_ASC])
        ->asArray()
        ->all();

        return $this->render('index', [
            'product' => $product,
        ]);
    }
}
