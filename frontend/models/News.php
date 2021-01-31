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
    public function getNewsCategory()
    {
        return $this->hasOne(\common\models\NewsCategory::className(), ['id' => 'news_category']);
    }
    public function getNewsDetail()
    {
        return $this->hasOne(\common\models\NewsDetail::className(), ['news_id' => 'news_id']);
    }
}
