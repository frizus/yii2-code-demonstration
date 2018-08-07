<?php

use yii\db\Migration;

/**
 * Class m180502_154020_create_table_list_specializations
 */
class m180502_154020_create_table_list_specializations extends Migration
{
    public function up()
    {
        $this->createTable('list_specializations', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('list_specializations');
    }
}
