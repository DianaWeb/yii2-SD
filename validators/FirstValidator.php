<?php

namespace app\validators;


use yii\validators\Validator;

class FirstValidator extends Validator
{
    public function validateAttribute($model, $attribute)       //переопределяем
    {
        if ($model->$attribute > 14) {
            var_dump($attribute);
           var_dump($model->$attribute);
            $this->addError($model, $attribute, "Время на выполнения задачи превысило допустимое");
            return;
        }
    }


}