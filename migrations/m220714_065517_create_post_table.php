<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m220714_065517_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'lead' => $this->string(150),
            'text' => $this->text(),
            'created_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
