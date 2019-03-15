<?php

namespace App\Order;

class OrderStrategy
{
    private $process;

    public function __construct($order_status)
    {
        $order_status = strtoupper($order_status);

        switch ($order_status) {
            case 'OPEN':
                $this->process = new OpenOrder;
                break;
            case 'PENDING':
                $this->process = new PendingOrder;
                break;
            case 'COMPLETE':
                $this->process = new CompleteOrder;
                break;
            case 'DONE':
                throw new \Exception('De order is al verwerkt en verstuurd naar de klant.');
                break;
            default:
                throw new \Exception('De order heeft een onjuiste status');
                break;
        }
    }

    public function executeOrder($order_id, $data)
    {
        return $this->process->start($order_id, $data);
    }
}