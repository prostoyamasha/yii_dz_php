<?php

use yii\db\Migration;

class m170430_054051_add_foreign_key_to_table_prodoct extends Migration
{
    public function up()
    {
        $this->addForeignKey(
            'product_category_id',
            'product',
            'category_id',
            'category',
            'id'
        );

    }

    public function down()
    {
        echo "m170430_054051_add_foreign_key_to_table_prodoct cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
