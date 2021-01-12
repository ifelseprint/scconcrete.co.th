<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $portfolio_id
 * @property string|null $portfolio_name_th
 * @property string|null $portfolio_name_en
 * @property string|null $portfolio_content_th
 * @property string|null $portfolio_content_en
 * @property string|null $portfolio_image
 * @property string|null $portfolio_image_path
 * @property int|null $is_active 0 = inactive, 1 = active
 * @property int|null $created_user
 * @property string|null $created_date
 * @property int|null $modified_user
 * @property string|null $modified_date
 * @property string|null $meta_tag_title_th
 * @property string|null $meta_tag_title_en
 * @property string|null $meta_tag_description_th
 * @property string|null $meta_tag_description_en
 * @property string|null $meta_tag_keywords_th
 * @property string|null $meta_tag_keywords_en
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active', 'created_user', 'modified_user'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['meta_tag_title_th', 'meta_tag_title_en', 'meta_tag_description_th', 'meta_tag_description_en', 'meta_tag_keywords_th', 'meta_tag_keywords_en'], 'string'],
            [['portfolio_name_th', 'portfolio_name_en'], 'string', 'max' => 100],
            [['portfolio_content_th', 'portfolio_content_en'], 'string', 'max' => 255],
            [['portfolio_image', 'portfolio_image_path'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'portfolio_id' => 'Portfolio ID',
            'portfolio_name_th' => 'Portfolio Name Th',
            'portfolio_name_en' => 'Portfolio Name En',
            'portfolio_content_th' => 'Portfolio Content Th',
            'portfolio_content_en' => 'Portfolio Content En',
            'portfolio_image' => 'Portfolio Image',
            'portfolio_image_path' => 'Portfolio Image Path',
            'is_active' => 'Is Active',
            'created_user' => 'Created User',
            'created_date' => 'Created Date',
            'modified_user' => 'Modified User',
            'modified_date' => 'Modified Date',
            'meta_tag_title_th' => 'Meta Tag Title Th',
            'meta_tag_title_en' => 'Meta Tag Title En',
            'meta_tag_description_th' => 'Meta Tag Description Th',
            'meta_tag_description_en' => 'Meta Tag Description En',
            'meta_tag_keywords_th' => 'Meta Tag Keywords Th',
            'meta_tag_keywords_en' => 'Meta Tag Keywords En',
        ];
    }
}
