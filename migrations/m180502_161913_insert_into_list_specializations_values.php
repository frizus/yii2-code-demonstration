<?php

use yii\db\Migration;

/**
 * Class m180502_161913_insert_into_list_specializations_values
 */
class m180502_161913_insert_into_list_specializations_values extends Migration
{
    public $values = [
        'Терапевт',
        'Хирург',
        'Педиатр'
    ];

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach($this->values as $value) {
            $this->insert('list_specializations', [
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
            $this->delete('list_specializations', [
                'name' => $value,
            ]);
        }
    }
}
