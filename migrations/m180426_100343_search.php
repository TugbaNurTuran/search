<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180426_100343_search
 */
class m180426_100343_search extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%main}}',array( 
            'keywordID' => $this -> primaryKey(),
            'keyword' => $this -> string(20),
            'wordContent' => $this -> text(),
        ));
        
       // $this->createIndex('keyword', 'main', 'keyword', 'true' );

        $this->createTable('{{%subject}}',array( 
            'keywordID' => $this -> primaryKey(),
            'keywordType' => $this -> string(200),
			'wordContent' => $this -> text(),
        ));

        $this->addForeignKey(
            'fk_main_keywordID',
            'subject',
            'keywordID',
            'main',
            'keywordID',
            'CASCADE'
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%main}}');
     //   $this->dropIndex('keyword', 'main');
        $this->dropTable('{{%subject}}');
        $this->dropForeignKey('fk_main_keywordID', 'main');
    }
}
