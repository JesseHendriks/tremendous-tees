<?php

use PHPUnit\Framework\TestCase;
use App\Helpers\Transaction;

class TransactionTest extends TestCase
{
    public function testCheckIfShipmentTransactionValueIsValid()
    {
        $transaction = Transaction::setOrderTransaction(1234, 'shipment', 1234);

        $this->assertTrue($transaction);
    }

    public function testCheckIfInvoiceTransactionIsValid()
    {
        $transaction = Transaction::setOrderTransaction(1234, 'invoice', 1234);

        $this->assertTrue($transaction);
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        Transaction::setOrderTransaction(1234, 'blaat', 1234);
    }
}