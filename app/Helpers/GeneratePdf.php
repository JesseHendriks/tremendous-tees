<?php

namespace App\Helpers;

class GeneratePdf
{
    private $fileName;
    private $body;

    public function __construct($fileName, $body)
    {
        $this->fileName = $fileName;
        $this->body = $body;
    }

    public function dummy()
    {
        file_put_contents(BASE_PATH . '/export/' . $this->fileName . '.txt', $this->body);
    }
}