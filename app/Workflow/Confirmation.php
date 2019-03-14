<?php

namespace App\Workflow;


use App\Helpers\Email;

class Confirmation extends WorkflowObserver
{
    public function update(WorkflowInterface $workflow)
    {
        $data = $workflow->getData();

        exit(var_dump($data));

        $email = new Email($data['customer']->email);

        $body = '';


        return true;
    }


}