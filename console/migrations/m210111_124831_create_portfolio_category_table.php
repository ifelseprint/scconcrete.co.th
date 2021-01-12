<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio_category}}`.
 */
class m210111_124831_create_portfolio_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%portfolio_category}}', [
            'id' => $this->primaryKey(),
            'portfolio_category_name_th' => $this->string(200),
            'portfolio_category_name_en' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio_category}}');
    }
}
