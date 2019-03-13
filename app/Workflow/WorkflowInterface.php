<?php

namespace App\Workflow;

interface WorkflowInterface
{
    public function attach(WorkflowObserver $observer);

    public function detach(WorkflowObserver $observer);

    protected function notify();
}