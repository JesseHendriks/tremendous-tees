<?php

namespace App\Objects;

use App\Database;
use App\ErrorLogTrait;

class Transaction
{
    private $database;

    use ErrorLogTrait;

    public function __construct()
    {
        $this->database = Database::connect();
    }

    public function addTransaction($transaction_type, $transaction_value, $order_number)
    {
        $data = [
            'order_number' => $order_number,
            'transaction_value' => $transaction_value,
            'transaction_type' => $transaction_type,
        ];

        try{
            $query = 'INSERT INTO order_transactions (order_number, transaction_type, transaction_value) VALUES (:order_number, :transaction_type, :transaction_value)';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);
            return true;
        } catch (\Exception $e){
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }

}