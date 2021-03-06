<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images`.
 */
class m180708_084633_create_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
//    public function safeUp()
//    {
//        $this->createTable('images', [
//            'id' => $this->primaryKey(),
//        ]);
//    }

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%images}}', [
            'id' => $this->primaryKey()->unsigned(),
            'parent_id' => $this->integer()->unsigned(),
            'bucket_id' => $this->integer()->unsigned(),
            'preview_hash' => $this->string(),
            'path' => $this->string(),
            'integrity' => $this->string(),
            'width' => $this->integer(5)->unsigned(),
            'height' => $this->integer(5)->unsigned(),
            'quality' => $this->integer(3)->unsigned(),
            'uploaded_at' => $this->integer()->unsigned(),
            'uploaded_by' => $this->integer()->unsigned()
        ]);
        $this->createIndex('in_images$parent_id', '{{%images}}', 'parent_id');

        $this->createTable('{{%images_buckets}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string()
        ]);
        $this->createIndex('un_images_buckets$name', '{{%images_buckets}}', 'name', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('images');
    }
}
