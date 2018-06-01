<?php

namespace JackLite\BX;

/**
 * Class Timer
 * @package JackLite\BX
 * Simple class for check code
 */
class Timer
{
    private static $instance = null;
    private $start = 0;
    private $end = 0;
    private $duration = 0;

    private function __construct()
    {
    }

    /**
     * @return Timer|null
     */
    public static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function start() {
        $this->start = microtime(true);
    }

    public function end() {
        $this->end = microtime(true);
        $this->duration = $this->end - $this->start;
    }

    public function getCurrentDuration() {
        $this->end();
        return $this->duration;
    }
}