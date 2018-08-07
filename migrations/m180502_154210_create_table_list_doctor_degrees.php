<?php

use yii\db\Migration;

/**
 * Class m180502_154210_create_table_list_doctor_degrees
 */
class m180502_154210_create_table_list_doctor_degrees extends Migration
{
    public function up()
    {
        $this->createTable('list_doctor_degrees', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('list_doctor_degrees');
    }
}
