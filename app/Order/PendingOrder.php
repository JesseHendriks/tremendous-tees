<?php

namespace App\Order;

class PendingOrder implements OrderStrategyInterface
{
    public function start($order_id, $data)
    {
        // Start the workflow
        return true;
    }
}