<?php

namespace App\Inventory;

class ProductAmount extends ProductFeature
{
    private $p;

    public function addFeature($feature)
    {
        $this->p = $this->product->getProduct();
        $this->p['amount'] = $feature;
    }

    public function getProduct()
    {
        return $this->p;
    }
}