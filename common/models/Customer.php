<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $customer_id
 * @property string|null $customer_name_th
 * @property string|null $customer_name_en
 * @property string|null $customer_image
 * @property string|null $customer_image_path
 * @property int|null $is_active 0 = inactive, 1 = active
 * @property int|null $created_user
 * @property string|null $created_date
 * @property int|null $modified_user
 * @property string|null $modified_date
 * @property int|null $pageview
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active', 'created_user', 'modified_user', 'pageview'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['customer_name_th', 'customer_name_en', 'customer_image_path'], 'string', 'max' => 100],
            [['customer_image'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'customer_name_th' => 'Customer Name Th',
            'customer_name_en' => 'Customer Name En',
            'customer_image' => 'Customer Image',
            'customer_image_path' => 'Customer Image Path',
            'is_active' => 'Is Active',
            'created_user' => 'Created User',
            'created_date' => 'Created Date',
            'modified_user' => 'Modified User',
            'modified_date' => 'Modified Date',
            'pageview' => 'Pageview',
        ];
    }
}
