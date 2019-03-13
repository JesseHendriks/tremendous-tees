<?php

namespace App\Order;

class CompleteOrder implements OrderStrategyInterface
{
    public function start($order_id)
    {
        // Start the workflow
        return true;
    }
}