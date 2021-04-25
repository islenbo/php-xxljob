<?php

namespace XxlJob\Requests;

/**
 * @property int $logDateTim    本次调度日志时间
 * @property int $logId         本次调度日志ID
 * @property int $fromLineNum   日志开始行号，滚动加载日志
 */
class LogRequest extends BaseRequest
{
    public $logDateTim;
    public $logId;
    public $fromLineNum;

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'logDateTim' => $this->logDateTim,
            'logId' => $this->logId,
            'fromLineNum' => $this->fromLineNum,
        ];
    }
}