<?php

namespace App\Inventory;

abstract class ProductFeature implements ProductInterface
{
    protected $product;

    abstract public function addFeature($feature);
    abstract public function getProduct();

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }
}