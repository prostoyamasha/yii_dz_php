<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cola`.
 */
class m170322_133746_create_cola_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cola', [
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'status' => 'integer']);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cola');
    }
}
