<?php

namespace App\Objects;

use App\Database;
use App\ErrorLogTrait;

class Product
{
    private $database;

    use ErrorLogTrait;

    public function __construct()
    {
        $this->database = Database::connect();
    }

    public function getProductByCode($product_code)
    {
        $data = [
            'product_code' => $product_code,
        ];

        try {
            $query = 'SELECT * FROM products WHERE product_code = :product_code';
            $stmt = $this->database->prepare($query);
            $stmt->execute($data);

            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
            $this->writeError();
            return false;
        }
    }
}