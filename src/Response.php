<?php

namespace XxlJob;

use JsonSerializable;

class Response implements JsonSerializable
{

    const SUCCESS_CODE = 200;

    public $code = 0;

    public $msg = null;

    /**
     * @var array | null
     */
    public $content = null;

    public static function success(?array $content = null): self
    {
        $result = new self();
        $result->code = self::SUCCESS_CODE;
        $result->content = $content;
        return $result;
    }

    public function jsonSerialize()
    {
        return [
            'code' => $this->code,
            'msg' => $this->msg,
            'content' => $this->content,
        ];
    }

    public static function jsonUnserialize(string $jsonStr): self
    {
        $json = json_decode($jsonStr, true);
        $result = new self();
        foreach ($json as $k => $v) {
            $result->$k = $v;
        }
        return $result;
    }
}