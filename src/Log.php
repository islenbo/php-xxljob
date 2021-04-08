<?php

namespace XxlJob;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * @method static Logger info(string $message, array $context = [])
 * @method static Logger error(string $message, array $context = [])
 * @method static Logger debug(string $message, array $context = [])
 */
class Log
{

    public static $logName = 'php-xxl-job';
    public static $logPath = 'php://stdout';
    public static $logLevel = Logger::DEBUG;

    public static function __callStatic($name, $arguments)
    {
        return self::getLog()->$name(...$arguments);
    }

    public static function getLog()
    {
        static $log;
        if ($log == null) {
            $log = new Logger(self::$logName);
            $log->pushHandler(new StreamHandler(self::$logPath, self::$logLevel));
        }
        return $log;
    }

}