<?php

namespace frontend\models;

use Yii;

class PortfolioDetail extends \common\models\PortfolioDetail
{

	public $portfolio_detail_content;
    public function rules()
    {
        return array_merge(parent::rules(), [
             [['portfolio_detail_content'], 'string'],
        ]);
    }

}
