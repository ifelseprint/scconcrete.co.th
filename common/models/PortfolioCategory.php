<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio_category".
 *
 * @property int $id
 * @property string|null $portfolio_category_name_th
 * @property string|null $portfolio_category_name_en
 */
class PortfolioCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['portfolio_category_name_th', 'portfolio_category_name_en'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'portfolio_category_name_th' => 'Portfolio Category Name Th',
            'portfolio_category_name_en' => 'Portfolio Category Name En',
        ];
    }
}
