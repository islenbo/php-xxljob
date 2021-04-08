<?php

namespace XxlJob;

interface ExecutorBiz
{

    public function beat();

    public function idleBeat();

    public function run();

    public function kill();

    public function log();

}