<?php

namespace XxlJob\Controller;

use App\Http\Controllers\Controller;
use XxlJob\ExecutorBiz;
use XxlJob\Response;

class LaravelController extends Controller
{

    /**
     * @var ExecutorBiz
     */
    private $executorBiz;

    public function __construct(ExecutorBiz $executorBiz)
    {
        $this->executorBiz = $executorBiz;
    }

    public function beat(): string
    {
        $this->executorBiz->beat();
        return json_encode(Response::success());
    }

    public function idleBeat(): string
    {
        $this->executorBiz->idleBeat();
        return json_encode(Response::success());
    }

    public function run(): string
    {
        $this->executorBiz->run();
        return json_encode(Response::success());
    }

    public function kill(): string
    {
        $this->executorBiz->kill();
        return json_encode(Response::success());
    }

    public function log(): string
    {
        $this->executorBiz->log();
        return json_encode(Response::success());
    }
}