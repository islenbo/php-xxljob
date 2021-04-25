<?php

namespace XxlJob\Requests\Laravel;

use Validator;

class LogRequest extends \XxlJob\Requests\LogRequest
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
            'logId' => ['required', 'numeric'],
            'logDateTim' => ['numeric'],
            'fromLineNum' => ['numeric'],
        ];
    }
}