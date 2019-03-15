<?php

namespace App;

use App\Order\OrderStrategy;

class StartOrderProcess
{
    public static function OrderProcess($order_id, $data)
    {
        $orderStatus = OrderStatus::getCurrentOrderStatus($order_id);

        try {
            $order = new OrderStrategy($orderStatus);
            return $order->executeOrder($order_id, $data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}