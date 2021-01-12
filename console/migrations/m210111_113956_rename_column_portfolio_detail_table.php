<?php

use yii\db\Migration;

/**
 * Class m210111_113956_rename_column_portfolio_detail_table
 */
class m210111_113956_rename_column_portfolio_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('portfolio_detail','portfolio_image','portfolio_detail_image');
        $this->renameColumn('portfolio_detail','portfolio_image_path','portfolio_detail_image_path');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_113956_rename_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_113956_rename_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }
    */
}
