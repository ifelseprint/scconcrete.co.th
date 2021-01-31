<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news_detail".
 *
 * @property int $news_detail_id
 * @property int|null $news_id
 * @property string|null $news_detail_content_th
 * @property string|null $news_detail_content_en
 * @property string|null $news_detail_image
 * @property string|null $news_detail_image_path
 *
 * @property News $news
 */
class NewsDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id'], 'integer'],
            [['news_detail_content_th', 'news_detail_content_en'], 'string'],
            [['news_detail_image'], 'string', 'max' => 50],
            [['news_detail_image_path'], 'string', 'max' => 20],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'news_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_detail_id' => 'News Detail ID',
            'news_id' => 'News ID',
            'news_detail_content_th' => 'News Detail Content Th',
            'news_detail_content_en' => 'News Detail Content En',
            'news_detail_image' => 'News Detail Image',
            'news_detail_image_path' => 'News Detail Image Path',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['news_id' => 'news_id']);
    }
}
