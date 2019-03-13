<?php

namespace App\Workflow;

abstract class WorkflowObserver
{
    abstract public function update(WorkflowInterface $workflow);
}