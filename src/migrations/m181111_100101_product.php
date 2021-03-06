<?php

namespace thienhungho\ProductManagement\migrations;

use yii\db\Schema;

class m181111_100101_product extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product}}', [
            'id'                => $this->primaryKey(),
            'title'             => $this->string(255)->notNull(),
            'slug'              => $this->string(255)->notNull(),
            'description'       => $this->text()->notNull(),
            'content'           => $this->text()->notNull(),
            'author'            => $this->integer(19),
            'feature_img'       => $this->string(255),
            'sku'               => $this->string(255),
            'quantity'          => $this->float()->defaultValue(-1),
            'status'            => $this->string(255)->defaultValue('Public'),
            'comment_status'    => $this->string(25)->defaultValue('Open'),
            'rating_status'     => $this->string(25)->defaultValue('Open'),
            'promotional_price' => $this->float(),
            'price'             => $this->float(),
            'unit'              => $this->string(255)->defaultValue('1 product'),
            'smallest_unit'     => $this->float()->defaultValue(1),
            'currency_unit'     => $this->string(255)->notNull()->defaultValue('USD'),
            'gallery'           => $this->text(),
            'product_parent'    => $this->integer(19),
            'product_type'      => $this->string(255),
            'language'          => $this->string(255),
            'assign_with'       => $this->integer(19),
            'created_at'        => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'updated_at'        => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'created_by'        => $this->integer(19),
            'updated_by'        => $this->integer(19),
            'FOREIGN KEY ([[author]]) REFERENCES {{%user}} ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[product_type]]) REFERENCES {{%product_type}} ([[name]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
