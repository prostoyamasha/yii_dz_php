<?php

use yii\db\Migration;

/**
 * Handles adding category_id to table `product`.
 */
class m170425_131329_add_category_id_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('product', 'category_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('product', 'category_id');
    }
}
