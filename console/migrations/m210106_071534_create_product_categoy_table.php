<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_categoy}}`.
 */
class m210106_071534_create_product_categoy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_categoy}}', [
            'id' => $this->primaryKey(),
            'product_category_name_th' => $this->string(200),
            'product_category_name_en' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_categoy}}');
    }
}
