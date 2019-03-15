<?php

namespace App\Order;

class CompleteOrder implements OrderStrategyInterface
{
    public function start($order_id, $data)
    {
        // Start the workflow
        return true;
    }
}