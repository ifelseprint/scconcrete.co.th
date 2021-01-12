<?php

use yii\db\Migration;

/**
 * Class m210112_170203_insert_data_portfolio_category_table
 */
class m210112_170203_insert_data_portfolio_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('portfolio_category',array(
            'portfolio_category_name_th'=>'อสังหาริมทรัพท์',
            'portfolio_category_name_en' =>'อสังหาริมทรัพท์',
        ));

        $this->insert('portfolio_category',array(
            'portfolio_category_name_th'=>'โครงการ',
            'portfolio_category_name_en' =>'โครงการ',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210112_170203_insert_data_portfolio_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210112_170203_insert_data_portfolio_category_table cannot be reverted.\n";

        return false;
    }
    */
}
