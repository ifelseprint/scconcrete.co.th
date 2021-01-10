<?php

use yii\db\Migration;

/**
 * Class m210110_141423_add_column_product_table
 */
class m210110_141423_add_column_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'product_detail_th', $this->integer()->after('product_name_th'));
        $this->addColumn('product', 'product_detail_en', $this->integer()->after('product_name_en'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210110_141423_add_column_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210110_141423_add_column_product_table cannot be reverted.\n";

        return false;
    }
    */
}
