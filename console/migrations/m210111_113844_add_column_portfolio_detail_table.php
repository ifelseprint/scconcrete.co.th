<?php

use yii\db\Migration;

/**
 * Class m210111_113844_add_column_portfolio_detail_table
 */
class m210111_113844_add_column_portfolio_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio_detail', 'portfolio_image', $this->string(200)->after('portfolio_detail_content_en'));
        $this->addColumn('portfolio_detail', 'portfolio_image_path', $this->string(20)->after('portfolio_image'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_113844_add_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_113844_add_column_portfolio_detail_table cannot be reverted.\n";

        return false;
    }
    */
}
