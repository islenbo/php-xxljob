<?php

namespace XxlJob\ExecutorBizs;

use XxlJob\ExecutorBiz;
use XxlJob\Requests\LogRequest;
use XxlJob\Requests\RunRequest;
use XxlJob\Response;
use XxlJob\VO\LogResponseVO;

class DefaultExecutorBizImpl implements ExecutorBiz
{

    /**
     * 心跳检测
     */
    public function beat(): Response
    {
        return Response::success();
    }

    /**
     * 忙碌检测
     * @param int $jobId
     * @return Response
     */
    public function idleBeat(int $jobId)
    {
        return Response::success();
    }

    /**
     * 触发任务执行
     * @param RunRequest $request
     * @return Response
     */
    public function run(RunRequest $request)
    {
        return Response::success();
    }

    /**
     * 终止任务
     * @param int $jobId
     * @return Response
     */
    public function kill(int $jobId)
    {
        return Response::success();
    }

    /**
     * 终止任务，滚动方式加载
     * @param LogRequest $request
     * @return Response
     */
    public function log(LogRequest $request)
    {
        return Response::success((new LogResponseVO())->toArray());
    }
}