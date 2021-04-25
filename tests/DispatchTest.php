<?php

namespace tests;

use XxlJob\Dispatch;
use PHPUnit\Framework\TestCase;

class DispatchTest extends TestCase
{

    /**
     * @var Dispatch
     */
    private $dispatch;

    protected function setUp(): void
    {
        $this->dispatch = new Dispatch('http://127.0.0.1:8080/xxl-job-admin', 'islenbo');
    }

    public function testRegistry()
    {
        $result = $this->dispatch->registry('xxl-job-executor-sample', 'http://127.0.0.1');
        $this->assertTrue($result);
    }

    public function testLoopRegistry()
    {
        $time = time();
        $loop = 3;
        $this->dispatch->loopRegistry('xxl-job-executor-sample', 'http://127.0.0.1', $loop);
        $this->assertTrue(time() - $time >= $loop);
    }
}
