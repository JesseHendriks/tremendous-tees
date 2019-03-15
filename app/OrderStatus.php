<?php

namespace App;

use App\Objects\Order;

class OrderStatus
{
    private $orderId;
    private $order;

    public static function getCurrentOrderStatus($order_id)
    {
        $orderObject = new Order();
        $order = $orderObject->getOrderByNumber($order_id);

        return $order->status;
    }

    public static function updateCurrentOrderStatus($order_id, $new_order_status)
    {
        $orderObject = new Order();
        $orderObject->updateStatus($order_id, $new_order_status);

    }

    public static function storeOrder($order)
    {
        $orderObject = new Order();
        $orderNumber = $orderObject->createOrder($order);

        foreach ($order->products as $product) {
            $orderObject->createOrderProducts($orderNumber, $product);
        }

        return $orderNumber;

    }
}