<?php

namespace App\Workflow;

abstract class WorkflowInterface
{
    abstract public function attach(WorkflowObserver $observer);

    abstract public function detach(WorkflowObserver $observer);

    abstract protected function execute();

    abstract public function getData();

}