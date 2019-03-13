<?php

namespace App\Order;

class OrderStrategy
{
    private $process;

    public function __construct($order_status)
    {
        switch ($order_status) {
            case 'OPEN':
                $this->process = new OpenOrder();
                break;
            case 'PENDING':
                $this->process = new PendingOrder();
                break;
            case 'COMPLETE':
                $this->process = new CompleteOrder();
                break;
            case 'DONE':
                // return 'order is complete';
                break;
        }
    }

    public function executeOrder($order_id)
    {
        return $this->process->start($order_id);
    }
}