<?php

namespace App\Inventory;

class Product implements ProductInterface
{
    private $p = [];

    public function addFeature($feature)
    {
        $this->p['product_number'] = $feature;
    }

    public function getProduct()
    {
        // TODO: Implement getProduct() method.
    }
}