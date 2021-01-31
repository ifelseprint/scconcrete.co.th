<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property int $branch_id
 * @property string|null $branch_name_th
 * @property string|null $branch_name_en
 * @property string|null $branch_address_th
 * @property string|null $branch_address_en
 * @property int|null $is_active 0 = inactive, 1 = active
 * @property int|null $created_user
 * @property string|null $created_date
 * @property int|null $modified_user
 * @property string|null $modified_date
 * @property int|null $pageview
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active', 'created_user', 'modified_user', 'pageview'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['branch_name_th', 'branch_name_en'], 'string', 'max' => 100],
            [['branch_address_th', 'branch_address_en'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'branch_id' => 'Branch ID',
            'branch_name_th' => 'Branch Name Th',
            'branch_name_en' => 'Branch Name En',
            'branch_address_th' => 'Branch Address Th',
            'branch_address_en' => 'Branch Address En',
            'is_active' => 'Is Active',
            'created_user' => 'Created User',
            'created_date' => 'Created Date',
            'modified_user' => 'Modified User',
            'modified_date' => 'Modified Date',
            'pageview' => 'Pageview',
        ];
    }
}
