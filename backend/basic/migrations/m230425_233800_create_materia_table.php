<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%materia}}`.
 */
class m230425_233800_create_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%materia}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->defaultValue(5),
            'id_carrera' => $this->integer(),
            'id_profesor' => $this->integer(),
        ]);

        $this->addForeignKey('fk_materia_id_carrera', 'materia', 'id_carrera', 'carrera', 'id');
        $this->addForeignKey('fk_materia_id_profesor', 'materia', 'id_profesor', 'profesor', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_materia_id_carrera',
            'materia'
        );

        $this->dropForeignKey(
            'fk_materia_id_profesor',
            'materia'
        );

        $this->dropTable('{{%materia}}');
    }
}


