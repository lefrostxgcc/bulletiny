<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bulletins}}`.
 */
class m200109_110908_create_bulletins_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bulletins}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'date_pub' => $this->datetime(),
            'title' => $this->string(),
            'info' => $this->string(),
            'contacts' => $this->string(),
            'city' => $this->string(),
            'price' => $this->double(),
            'status' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bulletins}}');
    }
}
