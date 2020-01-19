<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%bulletins}}`.
 */
class m200118_122456_add_avatar_column_to_bulletins_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%bulletins}}', 'avatar', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%bulletins}}', 'avatar');
    }
}
