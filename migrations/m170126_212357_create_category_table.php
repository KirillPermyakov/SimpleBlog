<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170126_212357_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

        $this->insert('category', [
            'title' => "Животныe"
        ]);
        $this->insert('category', [
            'title' => "Политика"
        ]);
        $this->insert('category', [
            'title' => "Новый Год"
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
