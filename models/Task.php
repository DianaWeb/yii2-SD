<?php

namespace app\models;


use app\validators\FirstValidator;
use yii\base\Model;

class Task extends Model
{
    public $perform;
    public $description;
    public $timeExecution;

    public function rules()
    {
        return [
            [['perform', 'description'], 'required'],
            [['perform'], 'string', 'max' => 20],
            [['description'], 'string'],
            [['timeExecution'], FirstValidator::class]
        ];
    }

}