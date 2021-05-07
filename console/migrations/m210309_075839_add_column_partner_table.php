<?php

use yii\db\Migration;

/**
 * Class m210309_075839_add_column_partner_table
 */
class m210309_075839_add_column_partner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('partner', 'partner_link', $this->string(200)->after('partner_image_path'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210309_075839_add_column_partner_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210309_075839_add_column_partner_table cannot be reverted.\n";

        return false;
    }
    */
}
