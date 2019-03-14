<?php

namespace App;

use App\Order\OrderStrategy;

class StartOrderProcess
{
    public static function OrderProcess($order_id)
    {
        $orderStatus = OrderStatus::getCurrentOrderStatus($order_id);

        try {
            $order = new OrderStrategy($orderStatus);
            return $order->executeOrder($order_id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}