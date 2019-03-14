<?php

namespace App\Workflow;


class Confirmation extends WorkflowObserver
{
    public function update(WorkflowInterface $workflow)
    {
        // Verstuur een orderbevestiging per mail.



        return 'Orderbevestiging verstuurd naar de klant.';
    }
}