<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partner".
 *
 * @property int $partner_id
 * @property string|null $partner_name_th
 * @property string|null $partner_name_en
 * @property string|null $partner_image
 * @property string|null $partner_image_path
 * @property string|null $partner_link
 * @property int|null $is_active 0 = inactive, 1 = active
 * @property int|null $created_user
 * @property string|null $created_date
 * @property int|null $modified_user
 * @property string|null $modified_date
 * @property int|null $pageview
 */
class Partner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active', 'created_user', 'modified_user', 'pageview'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['partner_name_th', 'partner_name_en', 'partner_image_path'], 'string', 'max' => 100],
            [['partner_image'], 'string', 'max' => 50],
            [['partner_link'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'partner_id' => 'Partner ID',
            'partner_name_th' => 'Partner Name Th',
            'partner_name_en' => 'Partner Name En',
            'partner_image' => 'Partner Image',
            'partner_image_path' => 'Partner Image Path',
            'partner_link' => 'Partner Link',
            'is_active' => 'Is Active',
            'created_user' => 'Created User',
            'created_date' => 'Created Date',
            'modified_user' => 'Modified User',
            'modified_date' => 'Modified Date',
            'pageview' => 'Pageview',
        ];
    }
}
