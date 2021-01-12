<?php

use yii\db\Migration;

/**
 * Class m210111_113045_rename_column_portfolio_and_portfolio_detail_table
 */
class m210111_113045_rename_column_portfolio_and_portfolio_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('service_detail_ibfk_1','portfolio_detail');

        $this->renameColumn('portfolio','service_id','portfolio_id');
        $this->renameColumn('portfolio','service_name_th','portfolio_name_th');
        $this->renameColumn('portfolio','service_name_en','portfolio_name_en');
        $this->renameColumn('portfolio','service_content_th','portfolio_content_th');
        $this->renameColumn('portfolio','service_content_en','portfolio_content_en');
        $this->renameColumn('portfolio','service_image','portfolio_image');
        $this->renameColumn('portfolio','service_image_path','portfolio_image_path');

        $this->renameColumn('portfolio_detail','service_detail_id','portfolio_detail_id');
        $this->renameColumn('portfolio_detail','service_id','portfolio_id');
        $this->renameColumn('portfolio_detail','service_detail_content_th','portfolio_detail_content_th');
        $this->renameColumn('portfolio_detail','service_detail_content_en','portfolio_detail_content_en');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_113045_rename_column_portfolio_and_portfolio_detail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_113045_rename_column_portfolio_and_portfolio_detail_table cannot be reverted.\n";

        return false;
    }
    */
}
