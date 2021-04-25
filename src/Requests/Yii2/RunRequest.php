<?php

namespace XxlJob\Requests\Yii2;

use portal\modules\v2\validators\Validator;

class RunRequest extends \XxlJob\Requests\RunRequest
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
            'jobId' => ['required', 'numeric:integer'],
            'executorHandler' => ['required', 'string'],
            'executorParams' => ['string'],
            'executorBlockStrategy' => ['string'],
            'executorTimeout' => ['numeric:integer'],
            'logId' => ['numeric:integer'],
            'logDateTime' => ['numeric:integer'],
            'glueType' => ['string'],
            'glueSource' => ['string'],
            'glueUpdatetime' => ['numeric:integer'],
            'broadcastIndex' => ['numeric:integer'],
            'broadcastTotal' => ['numeric:integer'],
        ];
    }
}