<?php

namespace App;

use App\Order\OrderStrategy;

class StartOrderProcess
{
    public static function startOrderProcess($order_id)
    {
        $order_status = new OrderStatus($order_id);

        $setStrategy = new OrderStrategy($order_status->getCurrentOrderStatus());
        $setStrategy->executeOrder($order_id);
    }
}