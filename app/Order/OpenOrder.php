<?php

namespace App\Order;

use App\Workflow\Transaction;

class OpenOrder implements OrderStrategyInterface
{
    public function start($order_id)
    {
        $transaction = new Transaction();
        $comfirmation = new Confirmation;

        return true;
    }
}