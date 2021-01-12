<?php

use yii\db\Migration;

/**
 * Class m210111_111700_rename_service_and_service_detail_table
 */
class m210111_111700_rename_service_and_service_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('service', 'portfolio');
        $this->renameTable('service_detail', 'portfolio_detail');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_111700_rename_service_and_service_detail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_111700_rename_service_and_service_detail_table cannot be reverted.\n";

        return false;
    }
    */
}
