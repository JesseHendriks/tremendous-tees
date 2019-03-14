<?php

namespace App\Helpers;

class Email
{
    private $sendTo;
    private $subject;
    private $body;

    public function __construct($sendTo, $subject, $body)
    {
        $this->sendTo = $sendTo;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function sendMail()
    {
        mail($this->sendTo, $this->subject, $this->body);
    }

    public function dummy()
    {
        file_put_contents(BASE_PATH . '/export/' . $this->subject . '.html', $this->body);
    }
}