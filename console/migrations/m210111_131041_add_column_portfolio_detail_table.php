<?php

use yii\db\Migration;

/**
 * Class m210111_131041_add_column_portfolio_detail_table
 */
class m210111_131041_add_column_portfolio_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio_detail', 'is_active', $this->integer()->after('portfolio_detail_image_path'));
        $this->addColumn('portfolio_detail', 'created_user', $this->integer(10)->after('is_active'));
        $this->addColumn('portfolio_detail', 'created_date', $this->datetime()->after('created_user'));
        $this->addColumn('portfolio_detail', 'modified_user', $this->integer(10)->after('created_date'));
        $this->addColumn('portfolio_detail', 'modified_date', $this->datetime()->after('modified_user'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_131041_add_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_131041_add_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }
    */
}
