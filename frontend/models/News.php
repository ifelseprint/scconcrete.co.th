<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;

class News extends \common\models\News
{
    public function afterFind() {
        $this->pageview++;
        $this->save();
    }
}
