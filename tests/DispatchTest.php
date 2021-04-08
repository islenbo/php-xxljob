<?php

namespace tests;

use XxlJob\Dispatch;
use PHPUnit\Framework\TestCase;

class DispatchTest extends TestCase
{

    public function testRegistry()
    {
        $dispatch = new Dispatch('http://127.0.0.1:8080/xxl-job-admin', 'islenbo');
        $result = $dispatch->registry('xxl-job-executor-sample', 'http://127.0.0.1');
        $this->assertTrue($result);
    }
}
