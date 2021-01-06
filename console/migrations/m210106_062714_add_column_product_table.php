<?php

use yii\db\Migration;

/**
 * Class m210106_062714_add_column_product_table
 */
class m210106_062714_add_column_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'product_category', $this->integer()->after('product_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210106_062714_add_column_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210106_062714_add_column_product_table cannot be reverted.\n";

        return false;
    }
    */
}
