<?php

namespace App;

use App\Objects\Order;

class OrderStatus
{
    private $orderId;
    private $order;

    public function __construct($order_id)
    {
        $this->orderId = $order_id;
        $this->order = new Order($this->orderId);
    }

    public function getCurrentOrderStatus()
    {
        $order = $this->order->read();

        return $order['status'];
    }

    public function updateCurrentOrderStatus($new_order_status)
    {

    }
}