<?php

namespace App;

trait ErrorLogTrait
{
    private $logPath = '/storage/log/error.log';
    public $message;

    public function writeError()
    {
        if(!file_exists(BASE_PATH . $this->logPath)){
            fopen(BASE_PATH . $this->logPath, 'w');
        }
        error_log($this->message . "\n\n", 3, BASE_PATH . $this->logPath);
    }
}