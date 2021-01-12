<?php

namespace backend\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
class PortfolioDetail extends \common\models\PortfolioDetail
{

    public $pageSize = 25;

    public function rules()
    {
        return array_merge(parent::rules(), [
            [['pageSize'], 'integer'],
        ]);
    }
    public function getPortfolio()
    {
        return $this->hasOne(\common\models\Portfolio::className(), ['portfolio_id' => 'portfolio_id']);
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

        if(!empty($this->portfolio_detail_image)){
            $image_file = 'portfolio_'.time().'.'.$this->portfolio_detail_image->extension;
            $this->portfolio_detail_image->saveAs($folder_upload."/".$path_folder."/".$image_file);
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

        $query = PortfolioDetail::find();
        $query->joinWith(['portfolio']);

        $dataProvider = new ActiveDataProvider([
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
            'query' => $query,
            'sort'=> ['defaultOrder' => ['portfolio_detail_id' => SORT_DESC]]
        ]);

        $dataProvider->sort->attributes['portfolio'] = [
            'asc' => ['portfolio.portfolio_name_th' => SORT_ASC],
            'desc' => ['portfolio.portfolio_name_th' => SORT_DESC],
        ];

        if (!($this->load($params))) {
            return $dataProvider;
        }
        $query->andFilterWhere(['like', 'portfolio_detail_content_th', $this->portfolio_detail_content_th]);
        $query->andFilterWhere(['like', 'portfolio_detail_content_en', $this->portfolio_detail_content_en]);
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
