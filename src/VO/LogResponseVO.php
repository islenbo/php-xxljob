<?php

namespace XxlJob\VO;

use JsonSerializable;

/**
 * @property int $fromLineNum    本次请求，日志开始行数
 * @property int $toLineNum      本次请求，日志结束行号
 * @property string $logContent  本次请求日志内容
 * @property bool $isEnd         日志是否全部加载完
 */
class LogResponseVO implements JsonSerializable
{
    public $fromLineNum = 0;
    public $toLineNum = 100;
    public $logContent = '';
    public $isEnd = true;

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'fromLineNum' => $this->fromLineNum,
            'toLineNum' => $this->toLineNum,
            'logContent' => $this->logContent,
            'isEnd' => $this->isEnd,
        ];
    }
}