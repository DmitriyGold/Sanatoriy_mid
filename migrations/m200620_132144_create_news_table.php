<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200620_132144_create_news_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'heading' => $this->string(100), // заголовок новссти
            'date_news' => $this->date(), // дата новости
            'description' => $this->string(500), // описание
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%news}}');
    }

}
