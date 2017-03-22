<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170322_153658_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => 'pk',
            'category_id' => 'integer',
            'title' => 'string',
            'price' => 'money',
        ]);
        $this->addForeignKey('cola_category_id', 'category', 'category_id',
                'cola', 'id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
