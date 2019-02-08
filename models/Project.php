<?php

namespace app\models;
use app\validators\FirstValidator;
use yii\base\Model;

class Project extends Model
{
    public $title;
    public $content;
    public $version;

    public function rules()                         //переопределяем. правила валидации
    {
        return [
            [['title', 'content'], 'required'],
            [['title'], 'string', 'max' => 5],
            [['content'], 'string'],
            [['version'], 'myValidate']               //'safe' - безопасный
        ];
    }

    public function fields()                    // переопределяем. управляем значениеми в массиве.
    {
        return [
            'header' => 'title',
            'content',
            'test' => function() {
                return 2+2;
            },
        ];
    }

    public function myValidate($attribute, $params)
    {
        if ($this->$attribute < 10) {
            var_dump($this->$attribute);      //9
            $this->addError($attribute, "Недоcтаточное значение аттрибута");
        }

    }
}