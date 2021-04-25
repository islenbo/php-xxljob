<?php

namespace XxlJob\Requests;

class BaseRequest
{
    public static function create(array $data = []): self
    {
        $obj = new static();
        foreach ($data as $k => $v) {
            if (property_exists($obj, $k)) {
                $obj->$k = $v;
            }
        }
        return $obj;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }

    /**
     * @return array 错误信息列表
     */
    public function validate(): array
    {
        return [];
    }

    /**
     * 校验规则
     * @return array
     */
    public function rules(): array
    {
        return [];
    }

    /**
     * 错误提示
     * @return array
     */
    public function message(): array
    {
        return [];
    }
}