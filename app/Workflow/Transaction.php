<?php

namespace App\Workflow;

class Transaction implements WorkflowInterface
{
    private $observers = [];
    private $data = '';

    protected function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attach(WorkflowObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(WorkflowObserver $observer)
    {
        foreach ($this->observers as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$key]);
            }
        }
    }


}