<?php

namespace app\controllers;


use yii\web\Controller;

class FirstController extends Controller
{
    public function actionIndex()
    {
        return $this->render('hello', [
            'message' => 'Привет на русском'
        ]);
    }

    public function actionHello()
    {
        return $this->render('hello2', [
            'message' => "Hello in English",
            'message2' => 'from Russia'
        ]);
    }





}