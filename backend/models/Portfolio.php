<?php

namespace backend\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
class Portfolio extends \common\models\Portfolio
{

    public $pageSize = 25;

    public function rules()
    {
        return array_merge(parent::rules(), [
            [['pageSize'], 'integer'],
        ]);
    }
    public function getPortfolioCategory()
    {
        return $this->hasOne(\common\models\PortfolioCategory::className(), ['id' => 'portfolio_category']);
    }
    public function upload()
    {

        $folder_upload = Yii::getAlias('@frontend').'/web/uploads';
        $year = date("Y");
        $month = date("m");

        $folder = $folder_upload."/".$year;
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        $folder = $folder_upload."/".$year."/".$month;
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        $path_folder = $year."/".$month;

        if(!empty($this->portfolio_image)){
            $image_file = 'portfolio_'.time().'.'.$this->portfolio_image->extension;
            $this->portfolio_image->saveAs($folder_upload."/".$path_folder."/".$image_file);
            return [
            'fileName' => $image_file,
            'filePath' => $path_folder
            ];
        }else{
            return false;
        }
    }
    public function search($params)
    {

        $query = Portfolio::find();
        $query->joinWith(['portfolioCategory']);

        $dataProvider = new ActiveDataProvider([
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
            'query' => $query,
            'sort'=> ['defaultOrder' => ['portfolio_id' => SORT_DESC]]
        ]);

        $dataProvider->sort->attributes['portfolioCategory'] = [
            'asc' => ['portfolio_category.portfolio_category_name_th' => SORT_ASC],
            'desc' => ['portfolio_category.portfolio_category_name_th' => SORT_DESC],
        ];

        if (!($this->load($params))) {
            return $dataProvider;
        }
        $query->andFilterWhere(['like', 'portfolio_name_th', $this->portfolio_name_th]);
        $query->andFilterWhere(['like', 'portfolio_name_en', $this->portfolio_name_en]);
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
