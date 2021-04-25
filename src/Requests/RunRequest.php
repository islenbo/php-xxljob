<?php

namespace XxlJob\Requests;

/**
 * @property int $jobId                     // 任务ID
 * @property string $executorHandler        // 任务标识
 * @property string $executorParams         // 任务参数
 * @property string $executorBlockStrategy  // 任务阻塞策略，可选值参考 com.xxl.job.core.enums.ExecutorBlockStrategyEnum
 * @property int $executorTimeout           // 任务超时时间，单位秒，大于零时生效
 * @property int $logId                     // 本次调度日志ID
 * @property string $logDateTime            // 本次调度日志时间
 * @property string $glueType               // 任务模式，可选值参考 com.xxl.job.core.glue.GlueTypeEnum
 * @property string $glueSource             // GLUE脚本代码
 * @property string $glueUpdatetime         // GLUE脚本更新时间，用于判定脚本是否变更以及是否需要刷新
 * @property int $broadcastIndex            // 分片参数：当前分片
 * @property int $broadcastTotal            // 分片参数：总分片
 */
class RunRequest extends BaseRequest
{
    public $jobId;
    public $executorHandler;
    public $executorParams;
    public $executorBlockStrategy;
    public $executorTimeout;
    public $logId;
    public $logDateTime;
    public $glueType;
    public $glueSource;
    public $glueUpdatetime;
    public $broadcastIndex;
    public $broadcastTotal;

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'jobId' => $this->jobId,
            'executorHandler' => $this->executorHandler,
            'executorParams' => $this->executorParams,
            'executorBlockStrategy' => $this->executorBlockStrategy,
            'executorTimeout' => $this->executorTimeout,
            'logId' => $this->logId,
            'logDateTime' => $this->logDateTime,
            'glueType' => $this->glueType,
            'glueSource' => $this->glueSource,
            'glueUpdatetime' => $this->glueUpdatetime,
            'broadcastIndex' => $this->broadcastIndex,
            'broadcastTotal' => $this->broadcastTotal,
        ];
    }
}