<?php

namespace XxlJob;

use XxlJob\Requests\LogRequest;
use XxlJob\Requests\RunRequest;

interface ExecutorBiz
{

    /**
     * 心跳检测
     */
    public function beat();

    /**
     * 忙碌检测
     * @param int $jobId
     * @return Response
     */
    public function idleBeat(int $jobId);

    /**
     * 触发任务执行
     * @param RunRequest $request
     * @return Response
     */
    public function run(RunRequest $request);

    /**
     * 终止任务
     * @param int $jobId
     * @return Response
     */
    public function kill(int $jobId);

    /**
     * 终止任务，滚动方式加载
     * @param LogRequest $request
     * @return Response
     */
    public function log(LogRequest $request);

}