<?php

use yii\db\Migration;

/**
 * Class m210111_124704_add_column_portfolio_table
 */
class m210111_124704_add_column_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio', 'portfolio_category', $this->integer()->after('portfolio_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_124704_add_column_portfolio_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_124704_add_column_portfolio_table cannot be reverted.\n";

        return false;
    }
    */
}
