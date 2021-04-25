<?php

namespace XxlJob\Requests\Yii2;

use portal\modules\v2\validators\Validator;

class LogRequest extends \XxlJob\Requests\LogRequest
{
    public function validate(): array
    {
        $validator = Validator::make($this->rules(), $this->toArray(), $this->message());
        if (!$validator->validate()) {
            return $validator->getErrors();
        }
        return [];
    }

    public function rules(): array
    {
        return [
            'logDateTim' => ['numeric:integer'],
            'logId' => ['numeric:integer'],
            'fromLineNum' => ['numeric:integer'],
        ];
    }
}