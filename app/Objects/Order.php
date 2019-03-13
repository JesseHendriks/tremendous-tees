<?php

namespace App\Objects;

use App\Database;

class Order
{
    private $order_id;

    public function __construct($order_id)
    {
        $this->order_id = $order_id;
    }

    public function read()
    {
        $database = Database::connect();

        try {
            $query = 'SELECT * FROM `orders`';
            $stmt = $database->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}