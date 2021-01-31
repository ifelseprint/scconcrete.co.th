<?php

namespace backend\models;

use Yii;
use yii\data\ActiveDataProvider;

class News extends \common\models\News
{

    public $pageSize = 25;


    public function rules()
    {
        return array_merge(parent::rules(), [
            [['pageSize'], 'integer'],
        ]);
    }
    public function getNewsCategory()
    {
        return $this->hasOne(\common\models\NewsCategory::className(), ['id' => 'news_category']);
    }
    public function search($params)
    {

        $query = News::find();
        $query->joinWith(['newsCategory']);

        $dataProvider = new ActiveDataProvider([
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
            'query' => $query,
            'sort'=> ['defaultOrder' => ['news_id' => SORT_DESC]]
        ]);

        $dataProvider->sort->attributes['news_category'] = [
            'asc' => ['news_category.news_category_name_th' => SORT_ASC],
            'desc' => ['news_category.news_category_name_th' => SORT_DESC],
        ];

        if (!($this->load($params))) {
            return $dataProvider;
        }
        $query->andFilterWhere(['=', 'news_category', $this->news_category]);
        $query->andFilterWhere(['like', 'news_name_th', $this->news_name_th]);
        $query->andFilterWhere(['like', 'news_name_en', $this->news_name_en]);
        $query->andFilterWhere(['=', 'is_active', $this->is_active]);

        return $dataProvider;
    }
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if ($insert) {
            //new record code here
            $this->created_user =  '1';
            $this->created_date =  date("Y-m-d H:i:s");
        } else {
            $this->modified_user =  '1';
            $this->modified_date = date("Y-m-d H:i:s");
        }
        return true;
    }
}
