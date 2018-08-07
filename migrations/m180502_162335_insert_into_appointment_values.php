<?php

use yii\db\Migration;

/**
 * Class m180502_162335_insert_into_appointment_values
 */
class m180502_162335_insert_into_appointment_values extends Migration
{
    public $values = [
        [
            'lastname' => 'Сюриков',
            'firstname' => 'Владислав',
            'patronymic' => 'Геннадьевич',
            'email' => 'syurikov77@example.com',
            'specialization' => 'Терапевт',
            'doctors_degree' => 'Специалист',
            'purpose' => 'Температура, насморк, кашель',
            'visit_date' => '2018-05-03 12:00:00',
        ],
        [
            'lastname' => 'Ткачева',
            'firstname' => 'Елена',
            'patronymic' => 'Олеговна',
            'email' => 'mebelvile@example.com',
            'specialization' => 'Хирург',
            'doctors_degree' => 'Кандидат наук',
            'purpose' => 'Консультация насчет подготовки к операции',
            'visit_date' => '2018-06-12 14:45',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach($this->values as $value) {
            $array = $value;
            $array['specialization'] = $this->db->createCommand('SELECT id FROM list_specializations WHERE name = :name', [':name' => $value['specialization']])->queryScalar();
            $array['doctors_degree'] = $this->db->createCommand('SELECT id FROM list_doctor_degrees WHERE name = :name', [':name' => $value['doctors_degree']])->queryScalar();
            $this->insert('appointment', $array);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        foreach($this->values as $value) {
            $array = $value;
            $array['specialization'] = $this->db->createCommand('SELECT id FROM list_specializations WHERE name = :name', [':name' => $value['specialization']])->queryScalar();
            $array['doctors_degree'] = $this->db->createCommand('SELECT id FROM list_doctor_degrees WHERE name = :name', [':name' => $value['doctors_degree']])->queryScalar();
            $this->delete('appointment', $array);
        }
    }
}
