<?php

namespace frontend\controllers;
use yii;

class PrecastController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
