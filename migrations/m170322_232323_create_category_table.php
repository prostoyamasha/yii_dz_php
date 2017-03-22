<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170322_232323_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => 'pk',
            'title' => 'varchar(255) NULL DEFAULT NULL',
            'status' => 'int(11) NULL DEFAULT NULL'
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
        
        $this->createTable('product', [
            'id' => 'pk',
            'category_id' => 'int(11) NULL DEFAULT NULL',
            'title' => 'varchar(255) NULL DEFAULT NULL',
            'price' => 'int(11) NULL DEFAULT NULL'
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
        
        $this->addForeignKey(
                'product_category_id',
                'product',
                'category_id',
                'category',
                'id'
                );
    }
    

   
}
