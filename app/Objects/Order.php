<?php

namespace App\Objects;

use App\Database;
use App\ErrorLogTrait;

class Order
{
    private $database;

    use ErrorLogTrait;

    public function __construct()
    {
        $this->database = Database::connect();
    }

    public function updateStatus($order_number, $new_status)
    {
        $data = [
            'order_number' => $order_number,
            'status' => $new_status,
        ];

        try {
            $query = 'UPDATE `orders` SET status = :status WHERE order_number = :order_number';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);

            return true;
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }

    public function getAllOrders()
    {
        try {
            $query = 'SELECT * FROM `orders`';
            $stmt = $this->database->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }

    public function getOrderByNumber($order_number)
    {
        $data = [
            'order_number' => $order_number
        ];

        try {
            $query = 'SELECT * FROM `orders` WHERE order_number = :order_number';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }

    public function createOrder($orderData)
    {
        $prepend = 'ORD000';
        $random = rand(1000, 9999);
        $order_number = $prepend . $random;

        $data = [
            'order_number' => $order_number,
            'customer_number' => $orderData->customer_number,
            'status' => 'OPEN',
        ];

        try {
            $query = 'INSERT INTO `orders` (order_number, customer_number, status) VALUES (:order_number, :customer_number, :status)';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);

            return $order_number;

        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();

            return false;
        }
    }

    public function createOrderProducts($order_number, $productData)
    {
        $data = [
            'order_number' => $order_number,
            'product_code' => $productData->product_code,
            'amount' => $productData->amount,
            'shirt_size' => $productData->shirt_size,
            'status' => 'WAITING',
        ];

        try {
            $query = 'INSERT INTO `orders` (order_number, product_code, amount, shirt_size, status) VALUES (:order_number, :product_code, :amount, :shirt_size, :status)';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);

            return true;
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }

}