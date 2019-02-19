<?php
namespace app\controllers;

use app\models\tables\Tasks;
use yii\web\Controller;

class DbController extends Controller
{
    public function actionIndex()
    {
        $db = \Yii::$app->db;

        $res2 = $db->createCommand(
            "SELECT * FROM test WHERE id = 2"
        )->queryOne();

        var_dump($res2);

        var_dump($db->createCommand(
            "SELECT id FROM test"
        )->queryColumn());

        $res = $db->createCommand(
            "SELECT COUNT(*) FROM test"
        )->queryScalar();

        var_dump($res);

        $res3 = $db->createCommand(
            "SELECT * FROM test"
        )->queryAll();

        var_dump($res3);

//        $db->createCommand(
//            "DELETE FROM  test WHERE id = :id"
//        )->bindValues([
//            ":id" => 5
//        ])->execute();
    }
//////////////////////////////////////////////////////////////
    public function actionAr()
    {
       /* $model = new Tasks([            //создание модели
            'name' => 'Tasks 1',
            'description' => 'gkhgvkglg',
            'creator_id' => 1,
            'responsible_id' => 2,
            'deadline' => date("Y-m-d"),
            'status_id' => 1
        ]);
        $model->save();*/
//////////////////
//       $model = Tasks::findOne(['name' => 'Task 4']);
//       var_dump($model);

//        $model = Tasks::findAll([2,4,5]);       //для элементов в массиве
//        var_dump($model);

//        var_dump(Tasks::find()->all());

//        $model = Tasks::findOne(1);
//        $model->description = 'test';
//        $model->save();         //если false, то не будет сразу валидировать

//        $model = Tasks::findOne(4);
//        $model->delete();

//        Tasks::deleteAll(['>', 'id', 4]);

        $model = Tasks::findOne(1);
        var_dump($model->find());   /** SELECT * FROM tasks */

        /** SELECT 'name', 'description' FROM tasks WHERE status_id > :status_id
         *  AND creator_id = :creator_id LIMIT 10
         */
        $query = $model->find()
            ->select(['name', 'description'])
            ->where('status_id > :stid')
            ->andWhere(['creator_id', 1])
            ->limit(10)
            ->all();

//var_dump($query);

        exit;



    }


}





























