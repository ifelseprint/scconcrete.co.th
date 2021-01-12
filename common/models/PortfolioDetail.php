<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio_detail".
 *
 * @property int $portfolio_detail_id
 * @property int|null $portfolio_id
 * @property string|null $portfolio_detail_content_th
 * @property string|null $portfolio_detail_content_en
 * @property string|null $portfolio_detail_image
 * @property string|null $portfolio_detail_image_path
 */
class PortfolioDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['portfolio_id'], 'integer'],
            [['portfolio_detail_content_th', 'portfolio_detail_content_en'], 'string'],
            [['portfolio_detail_image'], 'string', 'max' => 200],
            [['portfolio_detail_image_path'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'portfolio_detail_id' => 'Portfolio Detail ID',
            'portfolio_id' => 'Portfolio ID',
            'portfolio_detail_content_th' => 'Portfolio Detail Content Th',
            'portfolio_detail_content_en' => 'Portfolio Detail Content En',
            'portfolio_detail_image' => 'Portfolio Detail Image',
            'portfolio_detail_image_path' => 'Portfolio Detail Image Path',
        ];
    }
}
