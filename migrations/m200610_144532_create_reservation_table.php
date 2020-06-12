<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reservation}}`.
 */
class m200610_144532_create_reservation_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%reservation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // имя заказчика
            'email' => $this->string()->notNull()->unique(),
            'phone' => $this->string()->notNull()->unique(),
            'date_order' => $this->date(), // дата заказа  
            'date_begin' => $this->date(), // дата заезда  
            'date_end' => $this->date(), // дата отъезда
            'conditions' => $this->string(),
            'nameFile1' => $this->string(),            // оригинальное название файла
            'nameFile2' => $this->string(), // наименование файла в базе данных
            'body' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%reservation}}');
    }

}
