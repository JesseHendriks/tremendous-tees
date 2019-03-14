<?php

namespace App\Workflow;

class Transaction extends WorkflowInterface
{
    private $observers = [];
    private $data = [];

    public function execute()
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

    public function setData($data)
    {
        $this->data[] = $data;
        $this->execute();
    }

    public function getData()
    {
        return $this->data;
    }
}