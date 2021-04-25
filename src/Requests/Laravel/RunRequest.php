<?php

namespace XxlJob\Requests\Laravel;

use Validator;

class RunRequest extends \XxlJob\Requests\RunRequest
{
    /**
     * @return array
     */
    public function validate(): array
    {
        $validator = Validator::make($this->toArray(), $this->rules(), $this->message());
        return $validator->fails() ? [] : $validator->error()->all();
    }

    public function rules(): array
    {
        return [
            'jobId' => ['required', 'numeric'],
            'executorHandler' => ['required', 'string'],
            'executorParams' => ['string'],
            'executorBlockStrategy' => ['string'],
            'executorTimeout' => ['numeric'],
            'logId' => ['numeric'],
            'logDateTime' => ['numeric'],
            'glueType' => ['string'],
            'glueSource' => ['string'],
            'glueUpdatetime' => ['numeric'],
            'broadcastIndex' => ['numeric'],
            'broadcastTotal' => ['numeric'],
        ];
    }
}