<?php

namespace App\Inventory;

class ProductSize extends ProductFeature
{
    private $p;

    public function addFeature($feature)
    {
        $this->p = $this->product->getProduct();
        $this->p['size'] = $feature;
    }

    public function getProduct()
    {
        return $this->p;
    }
}