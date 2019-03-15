<?php

namespace App\Inventory;

interface ProductInterface
{
    public function addFeature($feature);
    public function getProduct();
}