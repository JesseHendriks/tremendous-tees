<?php

namespace App\Workflow;

use App\Helpers\GeneratePdf;
use App\Helpers\Transaction;

class Invoice extends WorkflowObserver
{
    private $customer;
    private $products;
    private $order;
    private $invoice;

    public function update(WorkflowInterface $workflow)
    {
        $prepend = 'INV000';
        $random = rand(1000, 9999);
        $invoice_number = $prepend . $random;

        $data = $workflow->getData();

        $this->customer = $data['customer'];
        $this->products = $data['products'];
        $this->order = $data['order'];
        $this->invoice = $invoice_number;

        try {
            Transaction::setOrderTransaction($this->order->order_number, 'invoice', $invoice_number);
        } catch (\Exception $e){
            return false;
        }

        $this->createInvoice();

        return true;
    }

    private function createInvoice()
    {

        $email = new GeneratePdf($this->invoice, 'Factuur data');
        $email->dummy();

        return true;
    }
}