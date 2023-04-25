<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carrera}}`.
 */
class m230425_233352_create_carrera_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carrera}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%carrera}}');
    }
}
