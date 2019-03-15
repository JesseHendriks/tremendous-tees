<?php

namespace App\Helpers;

use App\Objects\Transaction as TransactionObject;

class Transaction
{
    public static function setOrderTransaction($order_number, $transaction_type, $transaction_value)
    {
        $transactionObject = new TransactionObject();

        switch (strtoupper($transaction_type)){
            case 'SHIPMENT':
                $transaction_type = 'SHIPMENT';
                break;
            case 'INVOICE':
                $transaction_type = 'INVOICE';
                break;
            default:
                throw new \Exception('Type transactie is onjuist.');
                break;
        }

        return $transactionObject->addTransaction($order_number, $transaction_type, $transaction_value);
    }
}