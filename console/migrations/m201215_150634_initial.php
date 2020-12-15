<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m201215_150634_initial
 */
class m201215_150634_initial extends Migration
{
    public function up()
    {
        $this->createTable('client', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING,
            'last_name' => Schema::TYPE_STRING,
            'hash' => Schema::TYPE_STRING,
            'login' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'status'=> Schema::TYPE_INTEGER,
        ]);

        $this->createTable('manager', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING,
            'last_name' => Schema::TYPE_STRING,
            'hash' => Schema::TYPE_STRING,
            'login' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'status'=> Schema::TYPE_INTEGER,
        ]);

        $this->createTable('call', [
            'manager_id' => Schema::TYPE_INTEGER,
            'client_id' => Schema::TYPE_INTEGER,
            'start_time' => Schema::TYPE_DATE,
            'status' => Schema::TYPE_INTEGER, 
        ]);

        $this->createTable('course', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'url' => Schema::TYPE_STRING,
            'cost' => Schema::TYPE_MONEY,
        ]);
    }
    public function down()
    {
        echo "m201215_150634_initial cannot be reverted.\n";

        return false;
    }
}
