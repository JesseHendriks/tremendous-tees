<?php

namespace App\Order;

use App\Workflow;

class OpenOrder implements OrderStrategyInterface
{
    public function start($order_id)
    {
        $transaction = new Workflow\Transaction;

        // Stap 5
        $confirmation = new Workflow\Confirmation;

        // Stap 6
        $credit = new Workflow\Credit;

        // Stap 7
        $invoice = new Workflow\Invoice;

        // Stap 8
        $transport = new Workflow\Transport;

        $transaction->attach($confirmation);
        $transaction->attach($credit);
        $transaction->attach($invoice);
        $transaction->attach($transport);

        $transaction->setData($order_id);

        return true;
    }
}