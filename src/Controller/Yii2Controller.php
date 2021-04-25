<?php

namespace XxlJob\Controller;

use XxlJob\Requests\Yii2\LogRequest;
use XxlJob\Requests\Yii2\RunRequest;
use yii\web\Controller;
use XxlJob\ExecutorBiz;

class Yii2Controller extends Controller
{

    public $enableCsrfValidation = false;

    /**
     * @var bool 是否需要校验
     */
    public $enableValidation = false;

    /**
     * @var ExecutorBiz
     */
    protected $executorBiz;

    public function __construct($id, $module, ExecutorBiz $executorBiz, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->executorBiz = $executorBiz;
    }

    public function actionBeat(): string
    {
        return json_encode($this->executorBiz->beat());
    }

    public function actionIdleBeat(): string
    {
        return json_encode($this->executorBiz->idleBeat($this->safeGetJobId()));
    }

    public function actionRun(): string
    {
        return json_encode($this->executorBiz->run(new RunRequest()));
    }

    public function actionKill(): string
    {
        return json_encode($this->executorBiz->kill($this->safeGetJobId()));
    }

    public function actionLog(): string
    {
        return json_encode($this->executorBiz->log(new LogRequest()));
    }

    /**
     * 获取jobId
     */
    private function safeGetJobId(): int
    {
        return intval(Yii::$app->request->post('jobId', 0));
    }
}