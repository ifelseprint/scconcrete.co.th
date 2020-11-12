<?php

namespace frontend\controllers;
use yii;

class ConcreteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
