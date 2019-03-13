<?php

namespace App\Workflow;

interface WorkflowObserver
{
    public function update(WorkflowInterface $workflow);
}