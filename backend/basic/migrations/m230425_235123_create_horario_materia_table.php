<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%horario_materia}}`.
 */
class m230425_235123_create_horario_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%horario_materia}}', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer(),
            'id_reserva' => $this->integer(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk_horario_materia_id_materia', 'horario_materia', 'id_materia', 'materia', 'id');
        $this->addForeignKey('fk_horario_materia_id_reserva', 'horario_materia', 'id_reserva', 'reserva_aula', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_horario_materia_id_materia',
            'horario_materia'
        );

        $this->dropForeignKey(
            'fk_horario_materia_id_reserva',
            'horario_materia'
        );

        $this->dropTable('{{%horario_materia}}');
    }
}
