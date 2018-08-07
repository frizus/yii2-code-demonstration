<?php

use yii\db\Migration;

/**
 * Class m180502_162137_insert_into_list_doctor_degrees
 */
class m180502_162137_insert_into_list_doctor_degrees_values extends Migration
{
    public $values = [
        'Специалист',
        'Кандидат наук',
        'Доктор наук',
    ];

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach($this->values as $value) {
            $this->insert('list_doctor_degrees', [
                'name' => $value
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        foreach($this->values as $value) {
            $this->delete('list_doctor_degrees', [
                'name' => $value,
            ]);
        }
    }
}
