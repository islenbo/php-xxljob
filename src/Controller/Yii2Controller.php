<?php

namespace XxlJob\Controller;

use XxlJob\ExecutorBiz;
use XxlJob\Response;
use yii\web\Controller;

class Yii2Controller extends Controller
{

    public $enableCsrfValidation = false;

    /**
     * @var ExecutorBiz
     */
    private $executorBiz;

    public function __construct($id, $module, ExecutorBiz $executorBiz, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->executorBiz = $executorBiz;
    }

    public function actionBeat(): string
    {
        $this->executorBiz->beat();
        return json_encode(Response::success());
    }

    public function actionIdleBeat(): string
    {
        $this->executorBiz->idleBeat();
        return json_encode(Response::success());
    }

    public function actionRun(): string
    {
        $this->executorBiz->run();
        return json_encode(Response::success());
    }

    public function actionKill(): string
    {
        $this->executorBiz->kill();
        return json_encode(Response::success());
    }

    public function actionLog(): string
    {
        $this->executorBiz->log();
        return json_encode(Response::success());
    }
}