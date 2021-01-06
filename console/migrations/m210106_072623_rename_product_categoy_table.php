<?php

use yii\db\Migration;

/**
 * Class m210106_072623_rename_product_categoy_table
 */
class m210106_072623_rename_product_categoy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('product_categoy', 'product_category');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210106_072623_rename_product_categoy_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210106_072623_rename_product_categoy_table cannot be reverted.\n";

        return false;
    }
    */
}
