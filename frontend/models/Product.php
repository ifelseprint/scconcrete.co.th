<?php

namespace frontend\models;

use Yii;

class Product extends \common\models\Product
{

	public $product_name;
	public $product_detail;
    public function rules()
    {
        return array_merge(parent::rules(), [
             [['product_name','product_detail'], 'string'],
        ]);
    }

}
