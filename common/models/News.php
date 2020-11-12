<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $news_id
 * @property string|null $news_name_th
 * @property string|null $news_name_en
 * @property string|null $news_content_th
 * @property string|null $news_content_en
 * @property string|null $news_image
 * @property string|null $news_image_path
 * @property int|null $is_active 0 = inactive, 1 = active
 * @property int|null $created_user
 * @property string|null $created_date
 * @property int|null $modified_user
 * @property string|null $modified_date
 * @property int|null $pageview
 * @property string|null $meta_tag_title_th
 * @property string|null $meta_tag_title_en
 * @property string|null $meta_tag_description_th
 * @property string|null $meta_tag_description_en
 * @property string|null $meta_tag_keywords_th
 * @property string|null $meta_tag_keywords_en
 *
 * @property NewsDetail[] $newsDetails
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active', 'created_user', 'modified_user', 'pageview'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['meta_tag_title_th', 'meta_tag_title_en', 'meta_tag_description_th', 'meta_tag_description_en', 'meta_tag_keywords_th', 'meta_tag_keywords_en'], 'string'],
            [['news_name_th', 'news_name_en'], 'string', 'max' => 100],
            [['news_content_th', 'news_content_en'], 'string', 'max' => 255],
            [['news_image', 'news_image_path'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_name_th' => 'News Name Th',
            'news_name_en' => 'News Name En',
            'news_content_th' => 'News Content Th',
            'news_content_en' => 'News Content En',
            'news_image' => 'News Image',
            'news_image_path' => 'News Image Path',
            'is_active' => 'Is Active',
            'created_user' => 'Created User',
            'created_date' => 'Created Date',
            'modified_user' => 'Modified User',
            'modified_date' => 'Modified Date',
            'pageview' => 'Pageview',
            'meta_tag_title_th' => 'Meta Tag Title Th',
            'meta_tag_title_en' => 'Meta Tag Title En',
            'meta_tag_description_th' => 'Meta Tag Description Th',
            'meta_tag_description_en' => 'Meta Tag Description En',
            'meta_tag_keywords_th' => 'Meta Tag Keywords Th',
            'meta_tag_keywords_en' => 'Meta Tag Keywords En',
        ];
    }

    /**
     * Gets query for [[NewsDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDetails()
    {
        return $this->hasMany(NewsDetail::className(), ['news_id' => 'news_id']);
    }
}
