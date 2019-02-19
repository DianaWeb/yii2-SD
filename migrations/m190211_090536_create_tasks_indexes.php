<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks_indexes}}`.
 */
class m190211_090536_create_tasks_indexes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex("ix_task_responsible", "tasks", 'responsible_id');
        $this->createIndex("ix_task_creator", "tasks", 'creator_id');
        $this->createIndex("ix_task_status", "tasks", 'status_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks_indexes}}');
    }
}

//Total 1 new migration to be applied:
//        m190211_090536_create_tasks_indexes
//
//Apply the above migration? (yes|no) [no]:yes
//    *** applying m190211_090536_create_tasks_indexes
//> create index ix_task_responsible on tasks (responsible_id) ... done (time: 0.190s)
//    > create index ix_task_creator on tasks (creator_id) ... done (time: 0.106s)
//    > create index ix_task_status on tasks (status_id) ... done (time: 0.111s)
//*** applied m190211_090536_create_tasks_indexes (time: 0.420s)
//
//
//1 migration was applied.
//
//Migrated up successfully.

