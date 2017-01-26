<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170126_213436_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login' => $this->string(40),
            'password' => $this->string(100),
            'name' => $this->string(255),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
        $this->insert('user', [
            'login' => 'satana123',
            'password' => '123457',
            'name' => 'Gena',
        ]);
        $this->insert('user', [
            'login' => 'Holy777',
            'password' => '23456',
            'name' => 'Ilia',
        ]);
        $this->insert('user', [
            'login' => 'kiper12566',
            'password' => 'qw1234',
            'name' => 'Anton',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
