<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%consultations}}`.
 */
class m200505_022448_create_consultations_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%consultations}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // название консультации
            'price1' => $this->DECIMAL(10, 2), // прайсовая соимость 1         
            'price2' => $this->DECIMAL(10, 2), // прайсовая соимость 2
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%consultations}}');
    }

}
