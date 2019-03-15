<?php

namespace App\Inventory;

class checkInventory
{
    public static function inStock($product_number, $shirt_size, $amount)
    {
        $product = new Product();
        $product->addFeature($product_number);

        $productSize = new ProductSize($product);
        $productSize->addFeature($shirt_size);

        $productAmount = new ProductAmount($productSize);
        $productAmount->addFeature($amount);

        $completeProduct = $productAmount->getProduct();

        return $completeProduct;
    }
}