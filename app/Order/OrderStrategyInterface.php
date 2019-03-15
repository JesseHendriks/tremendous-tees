<?php

namespace App\Order;

interface OrderStrategyInterface
{
    public function start($order_id, $data);
}