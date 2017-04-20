<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product2category`.
 */
class m170420_005323_create_product2category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product2category', [
            'product_id' => $this->integer(),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product2category');
    }
}
