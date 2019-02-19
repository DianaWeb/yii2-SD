<?php
namespace app\controllers;
use app\models\Project;
use app\models\Task;
use app\models\TaskTest;
use yii\web\Controller;

class TaskController extends Controller
{
    public $layout = true;         //  можно указать  $layout = 'название';

    public function actionIndex()
    {
        echo "index"; exit;
    }

    public function actionTaskTest()
    {
        $task = new TaskTest();

        $task->setAttributes([
            'perform' => 'Diana',
            'description' => 'Описание задачи.....',
            'timeExecution' => 15
        ]);

        var_dump($task->validate());
        var_dump($task->getErrors());
        var_dump($task);
    }
//////////////////////
    public function actionTest()
    {
//        $model->title = 'Task-tracker';     явная предача данных в модель

//        return $this->render('test', [
//            'title' => 'Yiii',
//            'content' => 'lessson1'
//        ]);
//        $model = new Project([            первичная инициализация, во время создания модели
//            'title' => 'Task-tracker',
//            'content' => 'hjbjgljhbkn'
//        ]);
        $model = new Project();

        $model->setAttributes([            //инициализация, когда модель уже существет.
            'title' => 'Taskkk',
            'content' => 'hjbjgljhbkn',
            'version' => 9,
        ]);

//        $model->load([
//            'bdfbfgbf' => 'hggkg',
//            'Project' => [
//                'title' => 'Task-tracker',
//                'content' => 'hjbjgljhbkn',
//                'version' => 2,
//            ],
//            'jhgjhk' => 'lkjhgjhg',
//    ], 'Project');
//
        var_dump($model->validate());
        var_dump($model->getErrors());
//
//var_dump($model); exit;

//        var_dump($model->toArray()); exit;      //превращаем в массив
    }

}
































