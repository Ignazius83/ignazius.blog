<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170305_191620_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'password'=>$this->string(),
            'email'=>$this->string()->defaultValue(null),
            'isAdmin'=>$this->integer()->defaultValue(0),
            'photo'=>$this->string()->defaultValue(null),
            
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
