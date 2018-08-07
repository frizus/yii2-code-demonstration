<?php

use yii\db\Migration;

/**
 * Class m180502_154237_create_table_appointment
 */
class m180502_154237_create_table_appointment extends Migration
{
    public function up()
    {
        $this->createTable('appointment', [
            'id' => $this->primaryKey(),
            'lastname' => $this->string()->notNull(),
            'firstname' => $this->string()->notNull(),
            'patronymic' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'specialization' => $this->integer()->notNull(),
            'doctors_degree' => $this->integer()->notNull(),
            'purpose' => $this->text()->notNull(),
            'visit_date' => $this->dateTime()->notNull(),
            'is_paid' => $this->boolean()->defaultValue(false),
        ]);

        $this->addForeignKey(
            'fk-appointment-specialization-list_specializations-id',
            'appointment',
            'specialization',
            'list_specializations',
            'id',
            'RESTRICT',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-appointment-doctors_degree-list_doctor_degrees-id',
            'appointment',
            'doctors_degree',
            'list_doctor_degrees',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk-appointment-doctors_degree-list_doctor_degrees-id', 'appointment');

        $this->dropForeignKey('fk-appointment-specialization-list_specializations-id', 'appointment');

        $this->dropTable('appointment');
    }
}
